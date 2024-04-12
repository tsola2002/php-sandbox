<?php 

class OrderDetails{

    public $xmlFile;

    public function __construct($xmlFile){
        $this->xmlFile = $xmlFile;
    }

    public function getAllOrders(){
        $xml = simplexml_load_file($this->xmlFile);
        $orders = [];
        foreach ($xml->children() as $order) {
            $orders[] = [
                'id' => (string) $order['id'],
                'CustomerName' => (string) $order->CustomerName,
                'Address' => (string) $order->Address,
                'ProductOrdered' => (string) $order->ProductOrdered,
                'NoOfItems' => (int) $order->NoOfItems,
            ];
        }
        return $orders;
    }

    public function addOrder($id, $customerName, $address, $productOrdered, $noOfItems){
        $xml = simplexml_load_file($this->xmlFile);
        $order = $xml->addChild('Order');
        $order->addAttribute('id', $id);
        $order->addChild('CustomerName', $customerName);
        $order->addChild('Address', $address);
        $order->addChild('ProductOrdered', $productOrdered);
        $order->addChild('NoOfItems', $noOfItems);
        $xml->asXML($this->xmlFile);
    }

    public function updateOrder($id, $customerName, $address, $productOrdered, $noOfItems){
        $xml = simplexml_load_file($this->xmlFile);
        foreach($xml->children() as $order){
            if((string)$order['id'] === $id){
                $order->CustomerName = $customerName;
                $order->Address = $address;
                $order->ProductOrdered = $productOrdered;
                $order->NoOfItems = $noOfItems;
                $xml->asXML($this->xmlFile);
                return true;
            }
        }
        return false;
    }

    public function deleteOrder($id){
        $xml = simplexml_load_file($this->xmlFile);
        foreach ($xml->children() as $order) {
            if ((string) $order['id'] === $id) {
                $dom = dom_import_simplexml($order);
                $dom->parentNode->removeChild($dom);
                $xml->asXML($this->xmlFile);
                return true;
            }
        }
        return false;
    }


}
// USAGE
$orderDetails = new OrderDetails('Orders.xml');

// ADD A NEW ORDER
//$orderDetails->addOrder('007', 'OBINNA', 'IKOYI', 'MAC', 50);

// UPDATE AN ORDER
//$orderDetails->updateOrder('001', 'AMAKA', 'IKOTA', 'HANDBAG', 70);

$orderDetails->deleteOrder("001");


// DISPLAY ALL ORDERS
$allOrders = $orderDetails->getAllOrders();
print_r($allOrders);



?>