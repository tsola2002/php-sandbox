<?php 

class OrderDetails{

    private $xmlFile;

    private function __construct($xmlFile){
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


}




?>