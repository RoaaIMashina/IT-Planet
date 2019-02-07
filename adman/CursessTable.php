<?php 
//@roaa mashina && aya.almokhzanji@gmail.com
//the Courses table 
 class CT  
 {  
      //crud class  
      public $connect;  
      private $host = "localhost";  
      private $username = 'root';  
      private $password = '';  
      private     $database = 'itplanet';  
      function __construct()  
      {  
           $this->database_connect();  
      }  
      public function database_connect()  
      {  
           $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);  
      }  
      public function execute_query($query)  
      {  
           return mysqli_query($this->connect, $query);  
      }  
      public function get_data_in_table($query)  
      {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
           <table class="table table-bordered table-striped">  
                <tr>  
                      
                     <th width="2%">ID</th>
                       <th width="5%">name</th>
                     <th width="2%">logo</th>
                     <th width="35%">explanation</th> 
                     <th width="5%">content</th> 
                     <th width="10%">example</th>
                     <th width="5%">paht first image</th>
                     <th width="35%">explain the image</th> 
                    <th width="5%">paht second image</th>
                    <th width="5%">paht first video</th>
                    <th width="5%">paht second video</th>
                    <th width="5%">paht poster</th>
                </tr>  
           ';  
           while($row = mysqli_fetch_object($result))  
           {  
                $output .= '  
                <tr>       
                       
                     <td>'.$row->id_L.'</td>  
                     <td>'.$row->nameL.'</td> 
                     <td>'.$row->logo.'</td> 
                    <td>'.$row->par1.'</td> 
                    <td>'.$row->par2.'</td> 
                    <td>'.$row->par3.'</td> 
                    <td>'.$row->img1.'</td> 
                    <td>'.$row->par4.'</td> 
                    <td>'.$row->img2.'</td> 
                    <td>'.$row->vid1.'</td> 
                    <td>'.$row->vid2.'</td> 
                    <td>'.$row->poster.'</td> 
                </tr>  
                ';  
           }  
           $output .= '</table>';  
           return $output;  
      }       
 }  
 ?>  
