if(isset($_GET['txt'])){
    file_put_contents("test.html", 
       preg_replace(
          '/(id="txt".*?value=")\K.*?(?=")/s', $_GET['txt'], 
           file_get_contents("test.html")) 
       );
}
echo file_get_contents('test.html');