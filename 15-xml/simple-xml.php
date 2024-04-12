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
        $order->addChild('customerName', $customerName);
        $order->addChild('Address', $address);
        $order->addChild('ProductOrdered', $productOrdered);
        $order->addChild('NoOfItems', $noOfItems);
        $xml->asXML($this->xmlFile);
    }


}
// USAGE
$orderDetails = new OrderDetails('Orders.xml');

//DISPLAY ALL ORDERS
$allOrders = $orderDetails->getAllOrders();
print_r($allOrders);



?>