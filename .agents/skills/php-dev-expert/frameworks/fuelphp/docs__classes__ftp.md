# Ftp - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/ftp.html

---

#### forge($config = 'default', $connect = true)

The **forge** method is used to create a new instance of the FTP class and can either reference a different config group
or be passed an array of [configuration options](docs__classes__config.md).

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$config` | ``` 'default' ``` | The name of the config group to use, or a configuration array. | | `$connect` | ``` true ``` | Automatically connect to this server. | |
| Returns | Ftp object |
| Example | ``` // Connect to the default server $ftp = Ftp::forge();  // Connect to a predefined server defined in config/ftp.php $ftp2 = Ftp::forge('image-storage');  // Connect to a server on-the-fly $ftp3 = Ftp::forge(array( 	'hostname' => 'fuelphp.com', 	'username' => '', 	'password' => '', 	'timeout'  => 90, 	'port'     => 21, 	'passive'  => true, 	'ssl_mode' => false, 	'debug'    => false ));  if ($ftp3->delete_dir('/') === true) { 	exit('The world owes you a debt of gratitude'); } else { 	exit('You tried and that is the main thing.'); } ``` |
