<?php
require('fpdf.php');

//$db= new PDO('mysql:host=localhost;dbname=data','root', '');

class myPDF extends FPDF {

    function header () {
        $this -> Image ('logo.png', 10, 8, 40, 23);
        $this->SetTextColor(105, 128, 197);
        $this->SetFont ( 'Helvetica', 'B', 35);
        $this-> Cell (200, 12, 'Cine Everest',0,1, 'C') ;
        $this -> Ln (8);
        $this->SetFont ( 'Arial', '', 18);
        $this-> Cell (200, 5, 'Gracias por tu compra',0,0, 'C') ;
        $this -> Ln (30);



    }

    function headerTable() {
        $this->SetFont ( 'Times', 'B', 11);
        $this-> SetDrawColor(56, 84, 102);
         $this-> Cell (45, 15, 'Usuario',1,1, 'C') ;
         $this -> Ln (25);
         $this-> Cell (45, 15, 'Pelicula',1,0, 'C') ;
         $this-> Cell (60, 15, 'Cine',1,0, 'C') ;
         $this-> Cell (60, 15, 'Sala',1,0, 'C') ;
         $this -> Ln (45);
         $this-> Cell (45, 15, 'Asientos',1,1 ,'C') ;
         $this-> Cell (45, 15, 'Num de Tickets',1,1, 'C') ;
         $this-> Cell (45, 15, 'Precio unitario',1,1, 'C') ;
         $this-> Cell (45, 15, 'Total de compra',1,0, 'C') ;
         
         $this -> Ln (10);
 
 
     }

    /* function DatosSQL($db){

        $this->SetFont ( 'Times', 'B', 11);
        $stmt= $db->query('SELECT * FROM table');
        while ($data= $stmt->fetch(PDO::FETCH_OBJ)) 
        
        {

            $this-> Cell (45, 15, 'Usuario',1,1, 'C') ;
            $this -> Ln (25);
            $this-> Cell (45, 15, 'Pelicula',1,0, 'C') ;
            $this-> Cell (60, 15, 'Cine',1,0, 'C') ;
            $this-> Cell (60, 15, 'Sala',1,0, 'C') ;
            $this -> Ln (45);
            $this-> Cell (45, 15, 'Asientos',1,1 ,'C') ;
            $this-> Cell (45, 15, 'Num de Tickets',1,1, 'C') ;
            $this-> Cell (45, 15, 'Precio unitario',1,1, 'C') ;
            $this-> Cell (45, 15, 'Total de compra',1,0, 'C') ;
            
            $this -> Ln (10);

        } 

       



     } */


    function Body () {
        $this->SetFont ( 'Arial', 'B', 20);
        $this->SetTextColor(105, 128, 197);
        $this-> Cell (180, 35, 'Tu codigo',0,50, 'C') ;
        $this -> Image ('./qrcodefileQRcodetest.png', 70, 223, 60, 45);
        $this -> Ln (10);

    }


    function footer () {

        $this -> SetY (-15);
        $this->SetFont ( 'Arial', '', 10);
        $this-> Cell (0, 10, 'Page'.$this->PageNo().'/{nb}' ,0,10, 'C') ;
        
 
 
     }


}

        $pdf = new myPDF ('P','mm','A4');
        $pdf-> SetFillColor(186, 255, 255);
        
        $pdf -> AliasNbPages ();
        
        $pdf -> AddPage ();
        $pdf -> headerTable ();
        $pdf -> Body();
        
        
        
        
        $pdf -> Output ();

?>