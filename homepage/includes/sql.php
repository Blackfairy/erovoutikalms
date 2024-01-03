<?php
  require_once('includes/load.php');

/*--------------------------------------------------------------*/
/* Function for find all database table rows by table name
/*--------------------------------------------------------------*/
function find_all($table) {
  global $db;
  if (tableExists($table)) {
      $sql = "SELECT * FROM " . $db->escape($table);
      return $db->query($sql);
  }
}



/*--------------------------------------------------------------*/
/* Function for Perform queries
/*--------------------------------------------------------------*/
function find_by_sql($sql)
{
  global $db;
  $result = $db->query($sql);
  $result_set = $db->while_loop($result);
 return $result_set;
}


/*--------------------------------------------------------------*/
/*  Function for Find data from table by id
/*--------------------------------------------------------------*/
function find_by_id($table,$id)
{
  global $db;
  $id = (int)$id;
    if(tableExists($table)){
          $sql = $db->query("SELECT * FROM {$db->escape($table)} WHERE id='{$db->escape($id)}' LIMIT 1");
          if($result = $db->fetch_assoc($sql))
            return $result;
          else
            return null;
     }
}


/*--------------------------------------------------------------*/
/* Function for Delete data from table by id
/*--------------------------------------------------------------*/
function delete_by_id($table,$id)
{
  global $db;
  if(tableExists($table))
   {
    $sql = "DELETE FROM ".$db->escape($table);
    $sql .= " WHERE id=". $db->escape($id);
    $sql .= " LIMIT 1";
    $db->query($sql);
    return ($db->affected_rows() === 1) ? true : false;
   }
}


/*--------------------------------------------------------------*/
/*  Function for Find data from table by id in categories
/*--------------------------------------------------------------*/
function find_by_category_id($table,$id)
{
  global $db;
  $id = (int)$id;
    if(tableExists($table)){
          $sql = $db->query("SELECT * FROM {$db->escape($table)} WHERE category_id='{$db->escape($id)}' LIMIT 1");
          if($result = $db->fetch_assoc($sql))
            return $result;
          else
            return null;
     }
}


/*--------------------------------------------------------------*/
/* Function for Delete data from table by id in categories
/*--------------------------------------------------------------*/
function delete_by_category_id($table, $id)
{
    global $db;
    if (tableExists($table)) {
        $sql = "DELETE FROM " . $db->escape($table);
        $sql .= " WHERE category_id=" . $db->escape($id);
        $sql .= " LIMIT 1";
        $db->query($sql);
        return ($db->affected_rows() === 1) ? true : false;
    }
}


/*--------------------------------------------------------------*/
/* Function for Count id  By table name
/*--------------------------------------------------------------*/
function count_by_id($table){
  global $db;
  if(tableExists($table))
  {
    $sql    = "SELECT COUNT(id) AS total FROM ".$db->escape($table);
    $result = $db->query($sql);
     return($db->fetch_assoc($result));
  }
}


/*---------------------------------------------------------------------*/
/* Function to count the total number of enrollees
/*---------------------------------------------------------------------*/
function count_enrollees() {
  global $db;
  $sql = "SELECT COUNT(*) AS total FROM students";
  $result = find_by_sql($sql);
  return ['total' => $result[0]['total']];
}

/*---------------------------------------------------------------------*/
/* Function to count the total number of courses
/*---------------------------------------------------------------------*/
function count_courses() {
  global $db;
  $sql = "SELECT COUNT(*) AS total FROM courses";
  $result = find_by_sql($sql);
  return ['total' => $result[0]['total']];
}

/*---------------------------------------------------------------------*/
/* Function to count the total number of rows in usertable
/*---------------------------------------------------------------------*/
/*function count_otp() {
  global $db;
  $sql = "SELECT COUNT(*) AS total FROM usertable";
  $result = find_by_sql($sql);
  return $result[0]['total'];
}*/
function count_verified($table){
  global $db;
  if(tableExists($table))
  {
    $sql    = "SELECT COUNT(id) AS total FROM usertable where status= 'verified' ";
    $result = $db->query($sql);
    return($db->fetch_assoc($result));
  }
}
/*---------------------------------------------------------------------*/
/* Function to count the total number of rows in usertable
/*---------------------------------------------------------------------*/
/*function count_email() {
  global $db;
  $sql = "SELECT COUNT(*) AS total FROM usertable";
  $result = find_by_sql($sql);
  return $result[0]['total'];
}


/*--------------------------------------------------------------*/
/* Determine if database table exists
/*--------------------------------------------------------------*/
function tableExists($table){
  global $db;
  $table_exit = $db->query('SHOW TABLES FROM '.DB_NAME.' LIKE "'.$db->escape($table).'"');
      if($table_exit) {
        if($db->num_rows($table_exit) > 0)
              return true;
         else
              return false;
      }
  }


  /*--------------------------------------------------------------*/
  /* Function for Finding all product name
  /* JOIN with category and media database table
  /*--------------------------------------------------------------*/
  function join_product_table()
  {
      global $db;
      $sql  = "SELECT p.id, p.name, p.quantity, p.price, p.media_id, p.date, c.name";
      $sql .= " AS category, m.file_name AS image";
      $sql .= " FROM products p";
      $sql .= " LEFT JOIN categories c ON c.id = p.category_id";
      $sql .= " LEFT JOIN media m ON m.id = p.media_id";
      $sql .= " ORDER BY p.id ASC";
      return find_by_sql($sql);
  }

  function join_course_table()
{
    global $db;
    $sql  = "SELECT c.id, c.course_code, c.course_name, c.course_description, c.instructor_first_name, c.instructor_last_name, c.start_date, c.end_date";
    $sql .= " FROM courses c";
    $sql .= " ORDER BY c.id ASC";
    return find_by_sql($sql);
}
function join_student_table()
{
    global $db;
    $sql  = "SELECT s.id, s.first_name, s.last_name, s.date_of_birth, s.gender, s.major, s.student_email, s.enrolled_courses, s.enrolled_at";
    $sql .= " FROM students s";
    $sql .= " ORDER BY s.id ASC";
    return find_by_sql($sql);
}
function join_user_table()
{
    global $db;
    $sql  = "SELECT u.id, u.name, u.email, u.code, u.status, u.created_at";
    $sql .= " FROM usertable u";
    $sql .= " ORDER BY u.id ASC";
    return find_by_sql($sql);
}


  /*--------------------------------------------------------------*/
  /* Function for Finding all training name
  /* JOIN with category and media database table
  /*--------------------------------------------------------------*/
  function join_training_table()
  {
      global $db;
      $sql  = "SELECT p.id, p.name, p.quantity, p.price, p.media_id, p.date, c.category_name, m.file_name";
      $sql .= " FROM trainings p";
      $sql .= " LEFT JOIN training_categories c ON c.category_id = p.category_id"; // Updated this line
      $sql .= " LEFT JOIN training_media m ON m.id = p.media_id";
      $sql .= " ORDER BY p.id ASC";
      return find_by_sql($sql);
  }


  /*--------------------------------------------------------------*/
  /* Function for Finding all product name
  /* Request coming from ajax.php for auto suggest
  /*--------------------------------------------------------------*/
   function find_product_by_title($product_name){
     global $db;
     $p_name = remove_junk($db->escape($product_name));
     $sql = "SELECT name FROM products WHERE name like '%$p_name%' LIMIT 5";
     $result = find_by_sql($sql);
     return $result;
   }


  /*--------------------------------------------------------------*/
  /* Function for Finding all product info by product title
  /* Request coming from ajax.php
  /*--------------------------------------------------------------*/
  function find_all_product_info_by_title($title){
    global $db;
    $sql  = "SELECT * FROM products ";
    $sql .= " WHERE name ='{$title}'";
    $sql .=" LIMIT 1";
    return find_by_sql($sql);
  }


  /*--------------------------------------------------------------*/
  /* Function for finding product with ID
  /*--------------------------------------------------------------*/
  function find_product_by_id($product_id) {
      global $db;
      $result = $db->query("SELECT * FROM products WHERE id = '{$product_id}' LIMIT 1");
      return $db->fetch_assoc($result);
  }


  /*--------------------------------------------------------------*/
  /* Function for Update product quantity
  /*--------------------------------------------------------------*/
  function update_product_qty($qty,$p_id){
    global $db;
    $qty = (int) $qty;
    $id  = (int)$p_id;
    $sql = "UPDATE products SET quantity=quantity -'{$qty}' WHERE id = '{$id}'";
    $result = $db->query($sql);
    return($db->affected_rows() === 1 ? true : false);
  }

  /*--------------------------------------------------------------*/
  /* Function to find a training sale by its ID
  /*--------------------------------------------------------------*/
  function find_sale_by_id($id) {
    global $db;
    $result = $db->query("SELECT * FROM training_sales WHERE id = '{$id}' LIMIT 1");
    return $db->fetch_assoc($result);
  }

  /*--------------------------------------------------------------*/
  /* Function for Finding all training name
  /* Request coming from ajax_training.php for auto suggest
  /*--------------------------------------------------------------*/
  function find_training_by_title($product_name){
    global $db;
    $p_name = remove_junk($db->escape($product_name));
    $sql = "SELECT name FROM trainings WHERE name like '%$p_name%' LIMIT 5";
    $result = find_by_sql($sql);
    return $result;
  }


  /*--------------------------------------------------------------*/
  /* Function for Finding all training info by training title
  /*--------------------------------------------------------------*/
  function find_all_training_info_by_title($title){
    global $db;
    $sql  = "SELECT * FROM trainings ";
    $sql .= " WHERE name ='{$title}'";
    $sql .=" LIMIT 1";
    return find_by_sql($sql);
  }


  /*--------------------------------------------------------------*/
  /* Function for finding training with ID
  /*--------------------------------------------------------------*/
  function find_training_by_id($training_id) {
      global $db;
      $result = $db->query("SELECT * FROM trainings WHERE id = '{$training_id}' LIMIT 1");
      return $db->fetch_assoc($result);
  }


/*--------------------------------------------------------------*/
/* Function for Update training quantity
/*--------------------------------------------------------------*/
function update_training_qty($sale_qty, $p_id)
{
    global $db;
    $sale_qty = (int) $sale_qty;
    $p_id = (int) $p_id;

    // Retrieve the current quantity
    $result = $db->query("SELECT quantity FROM trainings WHERE id = '{$p_id}'");
    $current_quantity = $db->fetch_assoc($result)['quantity'];

    // Ensure the new quantity doesn't go below zero
    $new_quantity = max(0, $current_quantity - $sale_qty);

    // Update the quantity in the trainings table
    $sql = "UPDATE trainings SET quantity = '{$new_quantity}' WHERE id = '{$p_id}'";
    $result = $db->query($sql);

    return ($db->affected_rows() === 1 ? true : false);
}







  /*--------------------------------------------------------------*/
  /* Function for find all product sales
  /*--------------------------------------------------------------*/
  function find_all_sale(){
    global $db;
    $sql  = "SELECT s.id,s.qty,s.price,s.date,p.name";
    $sql .= " FROM sales s";
    $sql .= " LEFT JOIN products p ON s.product_id = p.id";
    $sql .= " ORDER BY s.date DESC";
    return find_by_sql($sql);
  }


  /*--------------------------------------------------------------*/
  /* Function for find all training sales
  /*--------------------------------------------------------------*/
  function find_all_training_sale(){
    global $db;
    $sql  = "SELECT s.id,s.qty,s.price,s.date,p.name";
    $sql .= " FROM training_sales s";
    $sql .= " LEFT JOIN trainings p ON s.training_id = p.id";
    $sql .= " ORDER BY s.date DESC";
    return find_by_sql($sql);
  }

  /*--------------------------------------------------------------*/
  /* Function to Count Total Sales
  /*--------------------------------------------------------------*/
  function count_total_sales()
  {
      global $db;
      $result = $db->query("SELECT COUNT(*) AS total_sales FROM training_sales");
      return $db->fetch_assoc($result)['total_sales'];
  }

  /*--------------------------------------------------------------*/
  /* Function for Generate Products sales report by two dates
  /*--------------------------------------------------------------*/
  function find_sale_by_dates($start_date, $end_date)
  {
      global $db;
      $start_date = date("Y-m-d", strtotime($start_date));
      $end_date   = date("Y-m-d", strtotime($end_date));
      $sql        = "SELECT s.date, p.name as product_name, p.price as product_price, ";
      $sql       .= "COUNT(s.product_id) AS total_records, ";
      $sql       .= "SUM(s.qty) AS total_qty, ";
      $sql       .= "SUM(p.price * s.qty) AS total_price ";
      $sql       .= "FROM sales s ";
      $sql       .= "LEFT JOIN products p ON s.product_id = p.id ";
      $sql       .= "WHERE s.date BETWEEN '{$start_date}' AND '{$end_date}' ";
      $sql       .= "GROUP BY DATE(s.date), p.name ";
      $sql       .= "ORDER BY DATE(s.date) DESC";
      return $db->query($sql);
  }


  /*--------------------------------------------------------------*/
  /* Function for Generate Daily Products sales report
  /*--------------------------------------------------------------*/
  function dailySales($year, $month, $day) {
    global $db;
    $padded_day = sprintf("%02d", $day); // Ensure two digits for the day with leading zero
    $formatted_date = "{$year}-{$month}-{$padded_day}";

    $sql  = "SELECT s.qty,";
    $sql .= " DATE_FORMAT(s.date, '%Y-%m-%d') AS date, p.name,";
    $sql .= " p.price * s.qty AS total_price";
    $sql .= " FROM sales s";
    $sql .= " LEFT JOIN products p ON s.product_id = p.id";
    $sql .= " WHERE DATE(s.date) = '{$formatted_date}'";

    return find_by_sql($sql);
  }


  /*--------------------------------------------------------------*/
  /* Function for Generate Daily sales report for training
  /*--------------------------------------------------------------*/
  function daily_training_Sales($year, $month, $day) {
    global $db;
    $padded_day = sprintf("%02d", $day); // Ensure two digits for the day with leading zero
    $formatted_date = "{$year}-{$month}-{$padded_day}";

    $sql  = "SELECT s.qty,";
    $sql .= " DATE_FORMAT(s.date, '%Y-%m-%d') AS date, p.name,";
    $sql .= " p.price * s.qty AS total_price";
    $sql .= " FROM training_sales s";
    $sql .= " LEFT JOIN trainings p ON s.training_id = p.id";
    $sql .= " WHERE DATE(s.date) = '{$formatted_date}'";

    return find_by_sql($sql);
  }


  /*--------------------------------------------------------------*/
  /* Function for Generate Monthly Products sales report
  /*--------------------------------------------------------------*/
  function monthlySales($year, $month)
  {
      global $db;
      $sql  = "SELECT p.name,";
      $sql .= " SUM(s.qty) AS total_qty,";
      $sql .= " SUM(p.price * s.qty) AS total_price,";
      $sql .= " p.price AS product_price";  
      $sql .= " FROM sales s";
      $sql .= " LEFT JOIN products p ON s.product_id = p.id";
      $sql .= " WHERE DATE_FORMAT(s.date, '%Y' ) = '{$year}'";

      // Only include products for the selected month
      if ($month !== 'all') {
          $sql .= " AND DATE_FORMAT(s.date, '%c' ) = '{$month}'";
      }

      $sql .= " GROUP BY s.product_id";
      $sql .= " ORDER BY p.name ASC";
      return find_by_sql($sql);
  }


  //*--------------------------------------------------------------*/
  /* Function for Generate Monthly Training sales report
  /*--------------------------------------------------------------*/
  function monthly_training_Sales($year, $month){
      global $db;
      $sql  = "SELECT p.name,";
      $sql .= " SUM(s.qty) AS total_qty,";
      $sql .= " SUM(p.price * s.qty) AS total_price,";
      $sql .= " p.price AS training_price";  
      $sql .= " FROM training_sales s";
      $sql .= " LEFT JOIN trainings p ON s.training_id = p.id";
      $sql .= " WHERE DATE_FORMAT(s.date, '%Y' ) = '{$year}'";

      // Only include products for the selected month
      if ($month !== 'all') {
          $sql .= " AND DATE_FORMAT(s.date, '%c' ) = '{$month}'";
      }

      $sql .= " GROUP BY s.training_id";
      $sql .= " ORDER BY p.name ASC";
      return find_by_sql($sql);
  }


  /*--------------------------------------------------------------*/
  /* Function for Generate Products sales report by two dates
  /*--------------------------------------------------------------*/
  function find_training_sale_by_dates($start_date, $end_date)
  {
      global $db;
      $start_date = date("Y-m-d", strtotime($start_date));
      $end_date   = date("Y-m-d", strtotime($end_date));
      $sql        = "SELECT s.date, p.name as training_name, p.price as training_price, ";
      $sql       .= "COUNT(s.training_id) AS total_records, ";
      $sql       .= "SUM(s.qty) AS total_qty, ";
      $sql       .= "SUM(p.price * s.qty) AS total_price ";
      $sql       .= "FROM training_sales s ";
      $sql       .= "LEFT JOIN trainings p ON s.training_id = p.id ";
      $sql       .= "WHERE s.date BETWEEN '{$start_date}' AND '{$end_date}' ";
      $sql       .= "GROUP BY DATE(s.date), p.name ";
      $sql       .= "ORDER BY DATE(s.date) DESC";
      return $db->query($sql);
  }





?>
