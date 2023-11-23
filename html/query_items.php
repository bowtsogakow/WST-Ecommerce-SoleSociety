<?php 

// function itemNum(){


//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $database = "test_wst_db"; 

//     $conn = new mysqli($servername, $username, $password, $database);// connection to the data base

//         $sql = "SELECT id FROM inventory_shoes";//query that result to the array of data
//         $result = $conn->query($sql);//puting it the result variable

   

//         if ($result->num_rows > 0) {//getting the number of rows
//             $data = array(); // Initialize an array to hold the data
//             while ($row = $result->fetch_assoc()) {//getting the data row by row
//                 $data[] = $row;// putting it the data variable row by row
//             }
//             header('Content-Type: application/json');// making sure that the file sending is in json file
//             echo json_encode($data);//encoding it in json file
//         } else {
//             // Handle the case where no rows are found
//             $response = array("error" => "No data found");//sending error that no data is found 
//             header('Content-Type: application/json');// making sure that the file sending is in json file
//             echo json_encode($response);//encoding it in json file
//         }
//     }
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "test_wst_db";

// $conn = new mysqli($servername, $username, $password, $database);



// if ($_SERVER['REQUEST_METHOD'] === 'GET') {



//     $menFilter = isset($_GET['men']) && $_GET['men'] === '1' ? 'men = 1' : '';



//     if (isset($_GET['filter'])) {
//         $filter = explode(',', $_GET['filter']);
//         $conditions = [];
      
//         foreach ($filter as $f) {
//             $conditions[] = "brand = '$f'"; // Assuming 'brand' is a column in your table
//         }
//         $whereClause = implode(' OR ', $conditions);

//         $whereClauses = array_filter([$menFilter, $whereClause]); 

//         $combinedWhereClause = implode(' AND ', $whereClauses);

//         $sql = "SELECT * FROM inventory_shoes";
//         if (!empty($combinedWhereClause)) {
//             $sql .= " WHERE $combinedWhereClause";
//         }
        
//         // Updated query to order by 'brand' in ascending order
//         $sql .= " ORDER BY brand ASC";

//         $result = $conn->query($sql);

//         if ($result->num_rows > 0) {
//             $data = [];
//             while ($row = $result->fetch_assoc()) {
//                 $data[] = $row;
//             }
//             header('Content-Type: application/json');
//             echo json_encode($data);
//         } else {
//             $response = ["error" => "No data found"];
//             header('Content-Type: application/json');
//             echo json_encode($response);
//         }
//     }
// }
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "";
$database = "solesocietyDB";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {



    if (isset($_GET['filter'])) {
        $filter = explode(',', $_GET['filter']);

        if(in_array('asc', $filter)) {
            $orderBy = 'asc';
            $key = array_search($orderBy, $filter);
            unset($filter[$key]);
            
        }
        if(in_array('desc', $filter)) {
            $orderBy = 'desc';
            $key = array_search($orderBy, $filter);
            unset($filter[$key]);
        }
      
        $priceClause = array_filter($filter, function ($value) {
        
            return strpos($value, 'price') !== false;
        });

        if (!empty($priceClause)) {
            // Extract the minimum and maximum prices from the filter
            $priceRange = explode('-', str_replace('price', '', reset($priceClause)));
            $minPrice = intval($priceRange[0]);
            $maxPrice = intval($priceRange[1]);
            
            // Add the price range conditions to the SQL query
            $priceCondition = "price BETWEEN $minPrice AND $maxPrice";
                  
           
        }

       
        

        $brandConditions = [];
        $otherConditions = [];
        $sizeConditions = [];

        foreach ($filter as $f) {
            // if ($f === 'brand') {
            //     // Handle 'Brand' checkbox
            //     $brandConditions[] = "brand = 1";} 
            // elseif ($f === 'men' || $f === 'women' || $f === 'kids' || $f === 'running' || $f === 'basketball' || $f === 'aesthetic' || $f === 'skateboarding') {
            //     // For other checkboxes
            //     $otherConditions[] = "$f = 1";
            // } elseif ($f === 'size3' || $f === 'size4' || $f === 'size5' || $f === 'size6' || $f === 'size7' || $f === 'size8' || $f === 'size9'|| $f === 'size10'|| $f === 'size11'|| $f === 'size12') {
            //     // For other checkboxes
            //     $sizeConditions[] = "$f = 1";
            // } else {
            //     // For brand selection
            //     $brandConditions[] = "brand = '$f'";
            // }
            switch ($f) {
                // case 'brand':
                //     // Handle 'Brand' checkbox
                //     $brandConditions[] = "brand = 1";
                //     break;
            
                case 'men':
                case 'women':
                case 'kids':
                case 'running':
                case 'basketball':
                case 'aesthetic':
                case 'skateboarding':
                    // For other checkboxes
                    $otherConditions[] = "$f = 1";
                    break;
            
                case 'size3':
                case 'size4':
                case 'size5':
                case 'size6':
                case 'size7':
                case 'size8':
                case 'size9':
                case 'size10':
                case 'size11':
                case 'size12':
                    // For size checkboxes
                    $sizeConditions[] = "$f = 1";
                    break;
            
                case 'nike':
                case 'new balance':
                case 'converse':
                case 'ewan':
                case 'adidas':
                case 'vans':
                case 'dior':
                case 'reebok':
                    // For brand selection
                    $brandConditions[] = "brand = '$f'";
                    break;
            }
        }

        $brandClause = implode(' OR ', $brandConditions);
        $otherClause = implode(' AND ', $otherConditions);
        $sizeClause = implode(' AND ', $sizeConditions);

        $whereClause = '';
        // if (!empty($brandClause) && !empty($otherClause)) {
        //     $whereClause = "($brandClause) AND ($otherClause)";
        // }elseif (!empty($brandClause) && !empty($sizeClause)) {
        //     $whereClause = "($brandClause) AND ($sizeClause)";
        // }elseif (!empty($otherClause) && !empty($sizeClause)) {
        //     $whereClause = "($otherClause) AND ($sizeClause)";
        // }elseif (!empty($brandClause) && !empty($otherClause) && !empty($sizeClause)) {
        //     $whereClause = "($brandClause) AND ($otherClause) AND ($sizeClause)";
        // }elseif (!empty($brandClause)) {
        //     $whereClause = $brandClause;
        // }elseif (!empty($otherClause)) {
        //     $whereClause = $otherClause;

        // } elseif (!empty($sizeClause)) {
        //     $whereClause = $sizeClause;
            
        // }elseif (!empty($brandClause) && !empty($otherClause)) {
        //     $whereClause = "($brandClause) AND ($otherClause)";
        // }elseif (!empty($brandClause) && !empty($sizeClause)) {
        //     $whereClause = "($brandClause) AND ($sizeClause)";
        // }elseif (!empty($otherClause) && !empty($sizeClause)) {
        //     $whereClause = "($otherClause) AND ($sizeClause)";
        // }


        // switch (true) {
        //     case (!empty($brandClause) && !empty($otherClause) && !empty($sizeClause) && !empty($priceClause)):
        //         $whereClause = "($brandClause) AND ($otherClause) AND ($sizeClause) AND ($priceCondition)" ;
        //         break;
        //     case (!empty($brandClause) && !empty($otherClause) && !empty($sizeClause)):
        //         $whereClause = "($brandClause) AND ($otherClause) AND ($sizeClause)";
        //         break;
        //     case (!empty($priceClause) && !empty($otherClause) && !empty($sizeClause)):
        //          $whereClause = "($priceCondition) AND ($otherClause) AND ($sizeClause)";
        //         break;
        //     case (!empty($brandClause) && !empty($priceClause) && !empty($sizeClause)):
        //         $whereClause = "($brandClause) AND ($priceCondition) AND ($sizeClause)";
        //         break;
        //     case (!empty($brandClause) && !empty($otherClause) && !empty($priceClause)):
        //          $whereClause = "($brandClause) AND ($otherClause) AND ($priceCondition)";
        //          break;
        //     case (!empty($brandClause) && !empty($priceClause)):
        //         $whereClause = "($brandClause) AND ($priceCondition)";
        //         break;
        //     case (!empty($priceClause) && !empty($otherClause)):
        //         $whereClause = "($priceCondition) AND ($otherClause)";
        //         break;
        //     case (!empty($priceClause) && !empty($sizeClause)):
        //         $whereClause = "($priceCondition) AND ($sizeClause)";
        //         break;
        //     case (!empty($brandClause) && !empty($otherClause)):
        //         $whereClause = "($brandClause) AND ($otherClause)";
        //         break;
        
        //     case (!empty($brandClause) && !empty($sizeClause)):
        //         $whereClause = "($brandClause) AND ($sizeClause)";
        //         break;
        
        //     case (!empty($otherClause) && !empty($sizeClause)):
        //         $whereClause = "($otherClause) AND ($sizeClause)";
        //         break;
        
        //     case (!empty($brandClause)):
        //         $whereClause = $brandClause;
        //         break;
        
        //     case (!empty($otherClause)):
        //         $whereClause = $otherClause;
        //         break;
        
        //     case (!empty($sizeClause)):
        //         $whereClause = $sizeClause;
        //         break;
        //     case (!empty($$priceClause)):
        //          $whereClause = $priceCondition;
        //         break;
        
        //     default:
        //         // Handle the case where none of the conditions are met.
        //         break;
        // }



        $whereConditions = [];

        if (!empty($brandClause)) {
            $whereConditions[] = "($brandClause)";
        }

        if (!empty($otherClause)) {
            $whereConditions[] = "($otherClause)";
        }

        if (!empty($sizeClause)) {
            $whereConditions[] = "($sizeClause)";
        }

        if (!empty($priceClause)) {
            $whereConditions[] = "($priceCondition)";
        }

        $whereClause = implode(' AND ', $whereConditions);
        // echo $whereClause;







        $sql = "SELECT * FROM shoe_inventory";
        if(!empty($whereClause)){
        
            $sql .= " WHERE $whereClause";
            $sql .= " ORDER BY price $orderBy";
        }else{

    $sql .= " ORDER BY price $orderBy";
        }
// switch (true) {
//     case($orderBy =='asc' || $orderBy =='desc'):
//             $sql .= " WHERE $whereClause";
//             $sql .= " ORDER BY brand $orderBy";
//             break;
//     default:
//         $sql .= " ORDER BY brand $orderBy";
//         break;
//         }

        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            header('Content-Type: application/json');
            echo json_encode($data);
        } else {
            $response = ["error" => "No data found"];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
    else{

        $sql = "SELECT * FROM inventory_shoes";
    
        $sql .= " ORDER BY brand ASC";
    
        $result = $conn->query($sql);
    
        if ($result && $result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            header('Content-Type: application/json');
            echo json_encode($data);
        } else {
            $response = ["error" => "No data found"];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
}
}
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "test_wst_db";

// $conn = new mysqli($servername, $username, $password, $database);

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     if (isset($_GET['filter'])) {
       
//         $filter = explode(',', $_GET['filter']);
        


//         if(in_array('Men=1', $filter) == true){
//             $index = array_search("Men=1", $filter);
//             unset($filter[$index]);
            
//             $whereClause = implode(' OR ', $conditions);
//             $whereClause .= 'AND Men = 1';

//         }   else{
//             $whereClause = implode(' OR ', $conditions);
//         }


       

//         $sql = "SELECT * FROM inventory_shoes";

       
//         $sql .= " WHERE $whereClause";
        

//         $sql .= " ORDER BY brand ASC";
//         $result = $conn->query($sql);

//         if ($result && $result->num_rows > 0) {
//             $data = [];
//             while ($row = $result->fetch_assoc()) {
//                 $data[] = $row;
//             }
//             header('Content-Type: application/json');
//             echo json_encode($data);
//         } else {
//             $response = ["error" => "No data found"];
//             header('Content-Type: application/json');
//             echo json_encode($response);
//         }
//     }
// }


// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "test_wst_db";

// $conn = new mysqli($servername, $username, $password, $database);

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {

//     $menFilter = isset($_GET['men']) && $_GET['men'] === '1' ? 'men = 1' : '';

//     if (isset($_GET['filter'])) {
//         $filter = explode(',', $_GET['filter']);
//         $conditions = [];
      
//         foreach ($filter as $f) {
//             $conditions[] = "(brand = '$f' OR men = '$f')"; // Considering 'men' and 'brand' columns
//         }
//         $whereClause = implode(' OR ', $conditions);

//         $whereClauses = array_filter([$menFilter, $whereClause]); 

//         $combinedWhereClause = implode(' AND ', $whereClauses);

//         $sql = "SELECT * FROM inventory_shoes";
//         if (!empty($combinedWhereClause)) {
//             $sql .= " WHERE $combinedWhereClause";
//         }
        
//         // Updated query to order by 'brand' in ascending order
//         $sql .= " ORDER BY brand ASC";

//         $result = $conn->query($sql);

//         if ($result->num_rows > 0) {
//             $data = [];
//             while ($row = $result->fetch_assoc()) {
//                 $data[] = $row;
//             }
//             header('Content-Type: application/json');
//             echo json_encode($data);
//         } else {
//             $response = ["error" => "No data found"];
//             header('Content-Type: application/json');
//             echo json_encode($response);
//         }
//     }
// }




// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "test_wst_db";

// $conn = new mysqli($servername, $username, $password, $database);

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {

//     $menFilter = isset($_GET['men']) && $_GET['men'] === '1' ? 'men = 1' : '';

//     if (isset($_GET['filter'])) {
//         $filter = explode(',', $_GET['filter']);
//         $conditions = [];
      
//         foreach ($filter as $f) {
//             $conditions[] = "(brand = '$f' OR men = '$f')"; // Considering 'men' and 'brand' columns
//         }
//         $whereClause = implode(' OR ', $conditions);

//         $whereClauses = array_filter([$menFilter, $whereClause]); 

//         $combinedWhereClause = implode(' AND ', $whereClauses);

//         $sql = "SELECT * FROM inventory_shoes";
//         if (!empty($combinedWhereClause)) {
//             $sql .= " WHERE $combinedWhereClause";
//         }
        
//         // Updated query to order by 'brand' in ascending order
//         $sql .= " ORDER BY brand ASC";

//         $result = $conn->query($sql);

//         if ($result->num_rows > 0) {
//             $data = [];
//             while ($row = $result->fetch_assoc()) {
//                 $data[] = $row;
//             }

//             if (isset($_GET['output']) && $_GET['output'] === 'html') {
//                 // Output HTML format
//                 echo "<div>";
//                 foreach ($data as $item) {
//                     echo "<p>Brand: " . $item['brand'] . " | Name: " . $item['name'] . "</p>";
//                 }
//                 echo "</div>";
//             } else {
//                 // Output JSON format
//                 header('Content-Type: application/json');
//                 echo json_encode($data);
//             }
//         } else {
//             if (isset($_GET['output']) && $_GET['output'] === 'html') {
//                 echo "<p>No items found.</p>";
//             } else {
//                 $response = ["error" => "No data found"];
//                 header('Content-Type: application/json');
//                 echo json_encode($response);
//             }
//         }
//     }
// }
    ?>