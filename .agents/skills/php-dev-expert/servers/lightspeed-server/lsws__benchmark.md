# Benchmarking Tips | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/benchmark/

---

# Benchmarking Tips[¶](#benchmarking-tips "Permanent link")

This guide will enable you to use a selection of benchmarking tools to make the fairest comparisons possible between different web servers. Testing such as this is essential to determining website capacity and capabilities for web applications.

These are the basic steps that will be covered:

1. [Prepare a Client Server and a Test Server](#step1)
2. [Install web servers to be benchmarked on Test Server](#step2)
3. [Test the web servers' general configurations](#step3)
4. [Run tests from the Client Server with your choice of tools](#step4):
   - [ApacheBench](#ab)
   - [Siege](#siege)
   - [h2load](#h2load)
   - [Jmeter](#jmeter)
   - [wrk](#wrk)

## Prepare a Client Server and a Test Server[¶](#prepare-a-client-server-and-a-test-server "Permanent link")

When preparing your servers, keep these principles in mind.

### Low Latency[¶](#low-latency "Permanent link")

Low latency is best achieved by launching your Test and Client servers in the same zone or country, or on a local network. You can test latency by sending a `ping` command from the Client Server:

```
ping -c5 Test_Server
```

Output:

```
--- 142.93.185.51 ping statistics ---
5 packets transmitted, 5 received, 0% packet loss, time 4099ms
rtt min/avg/max/mdev = 0.504/0.591/0.677/0.062 ms
```

In this example, we got an average of 0.591ms. You should be looking to achieve numbers lower than 1 ms.

### High Bandwidth Network[¶](#high-bandwidth-network "Permanent link")

Make sure the bandwidth between the two servers is enough. You don't want the network become your benchmark's bottleneck. You can easily verify sufficient bandwidth by using the `iperf` tool.

Install the tool on Ubuntu:

```
apt-get install iperf
```

Install the tool on CentOS:

```
yum install epel-release
yum update
yum install iperf
```

Run the command from the Client Server:

```
iperf -c TEST_SERVER_IP -i1
```

Run it from the Test Server:

```
iperf -s -i1
```

Output:

```
  [ ID] Interval       Transfer     Bandwidth
  [  x]  0.0- 1.0 sec   266 MBytes  2.23 Gbits/sec
  [  x]  1.0- 2.0 sec   234 MBytes  1.96 Gbits/sec
  [  x]  2.0- 3.0 sec   241 MBytes  2.02 Gbits/sec
  [  x]  3.0- 4.0 sec   239 MBytes  2.00 Gbits/sec
```

 The default iperf port is 5001.

Your firewall needs to be open for the default iperf testing port of 5001. Or, you can specify a different port with the `-p` parameter.

If you have bandwidth results of 1 GB or more, that should be sufficient.

### A Powerful Client Server[¶](#a-powerful-client-server "Permanent link")

To fully demonstrate the power of the web servers you are testing, the Client Server needs to be more powerful then the Test Server.

### No Proxy or CDN[¶](#no-proxy-or-cdn "Permanent link")

To avoid any potential bottlenecks on the Client Server, avoid using Proxies, Firewalls, Load Balancers or CDNs in front of the Test Server.

### Example of Server Specs[¶](#example-of-server-specs "Permanent link")

We've found that servers with the following specs are appropriate for benchmarking:

| Server | CPU | Memory | NetWork | latency | Zone |
| --- | --- | --- | --- | --- | --- |
| Test Client | 2 | 2GB | 2 Gbits/sec | 0.59 ms | NYC1 |
| Test Server | 1 | 1GB | 2 Gbits/sec | 0.59 ms | NYC1 |

## Install web servers to be benchmarked on Test Server[¶](#install-web-servers-to-be-benchmarked-on-test-server "Permanent link")

When setting up your Test Server, it is helpful to keep the following concepts in mind:

### Multiple Web Servers on the Same Test Server[¶](#multiple-web-servers-on-the-same-test-server "Permanent link")

Install all of the web servers you wish to test on the same Test Server. You will not be running all of the servers at the same time, but bringing up each one as needed.

### Same Modules[¶](#same-modules "Permanent link")

If you want to test benchmarks between different types of web servers, you will want to have all modules as identical as possible.

### Switching Web Servers[¶](#switching-web-servers "Permanent link")

With a Control Panel: It may be easier to test LSWS/Apache/Nginx on a control panel such as cPanel, which has a web server switch function built in, and where all PHP modules are quite similar to each other.

Without a Control Panel: You will probably need to manually stop web server A, and then bring up web server B. You can build [PHP modules with remi repo](https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:php:rpm#installing_php_from_remi_repo).

### Similar Nginx and OpenLiteSpeed PHP Modules[¶](#similar-nginx-and-openlitespeed-php-modules "Permanent link")

If you're looking to compare OpenLiteSpeed and nginx, you'll want to refer to this chart to make sure that you have similar modules installed between the two servers.

| Server | Nginx | OpenLiteSpeed |
| --- | --- | --- |
| PHP version | 7.2 | 7.2 |
| Unix Socket | On | On |
| Loaded Config File | /etc/php/7.2/fpm/php.ini | /usr/local/lsws/lsphp72/etc/php/7.2/litespeed/php.ini |
| Module | module\_bcmath | module\_bcmath |
| Module | module\_calendar | module\_calendar |
| Module | **module\_cgi-fcgi** | module\_core |
| Module | module\_core | module\_ctype |
| Module | module\_ctype | module\_curl |
| Module | module\_curl | module\_date |
| Module | module\_date | module\_dom |
| Module | module\_dom | module\_enchant |
| Module | module\_enchant | module\_exif |
| Module | module\_exif | module\_fileinfo |
| Module | module\_fileinfo | module\_filter |
| Module | module\_filter | module\_ftp |
| Module | module\_ftp | module\_gd |
| Module | module\_gd | module\_gettext |
| Module | module\_gettext | module\_gmp |
| Module | module\_gmp | module\_hash |
| Module | module\_hash | module\_iconv |
| Module | module\_iconv | module\_json |
| Module | module\_json | module\_libxml |
| Module | module\_libxml | module\_mbstring |
| Module | module\_mbstring | module\_mysqli |
| Module | module\_mysqli | module\_mysqlnd |
| Module | module\_mysqlnd | module\_openssl |
| Module | module\_openssl | **module\_pcntl** |
| Module | module\_pcre | module\_pcre |
| Module | module\_pdo | module\_pdo |
| Module | module\_pdo\_mysql | module\_pdo\_mysql |
| Module | module\_phar | module\_phar |
| Module | module\_posix | module\_posix |
| Module | module\_pspell | module\_pspell |
| Module | module\_readline | module\_readline |
| Module | module\_recode | module\_recode |
| Module | module\_reflection | module\_reflection |
| Module | module\_session | module\_session |
| Module | module\_simplexml | module\_simplexml |
| Module | module\_soap | module\_soap |
| Module | module\_sockets | module\_sockets |
| Module | **module\_sodium** |  |
| Module | module\_spl | module\_spl |
| Module | module\_standard | module\_standard |
| Module | module\_sysvmsg | module\_sysvmsg |
| Module | module\_sysvsem | module\_sysvsem |
| Module | module\_sysvshm | module\_sysvshm |
| Module | module\_tidy | module\_tidy |
| Module | module\_tokenizer | module\_tokenizer |
| Module | module\_xml | module\_xml |
| Module | module\_xmlreader | module\_xmlreader |
| Module | module\_xmlwriter | module\_xmlwriter |
| Module | module\_xsl | module\_xsl |
| Module | module\_zend+opcache | module\_zend+opcache |
| Module | module\_zip | module\_zip |
| Module | module\_zlib | module\_zlib |

 php.ini

We copy the `php.ini` file from one server to another, so the contents are identical.

### Nginx and OpenLiteSpeed Cache Types[¶](#nginx-and-openlitespeed-cache-types "Permanent link")

When comparing cache solutions between OpenLiteSpeed and nginx, use these types.

| Server | Nginx | OpenLiteSpeed |
| --- | --- | --- |
| Cache type | [fastcgi\_cache](http://nginx.org/en/docs/http/ngx_http_fastcgi_module.html) | [LSCache Plugin](https://wordpress.org/plugins/litespeed-cache/) |

## Test the Web Servers' General Configurations[¶](#test-the-web-servers-general-configurations "Permanent link")

For best results, keep these configuration suggestions in mind:

### Have a Large HTTP/HTTPS Connection Number[¶](#have-a-large-httphttps-connection-number "Permanent link")

Keep your connections number high.

### PHP-Related Settings Should Have High Numbers[¶](#php-related-settings-should-have-high-numbers "Permanent link")

Maximize suEXEC Max Conn, PHP Child number, and PHP Max number when you are testing PHP-based apps such as WordPress.

Tip

If you are testing other language, e.g. Python, please do increase the Max Connections as well)

### Configure all Web Servers the Same[¶](#configure-all-web-servers-the-same "Permanent link")

- Same SSL Ciphers
- OCSP ON
- Same Document Root
- Same level of compression
- Same number of workers
- Keep-alive enabled
- Debug log off

### Example Nginx and OpenLiteSpeed Setup[¶](#example-nginx-and-openlitespeed-setup "Permanent link")

| Server | Nginx | OpenLiteSpeed |
| --- | --- | --- |
| Version | 1.15.8 | 1.4.44 |
| Config Port | 80/443 | 80/443 |
| Certificate | /etc/letsencrypt/live/wp-benchmark.tk | /etc/letsencrypt/live/wp-benchmark.tk |
| doc root | /var/www/html | /var/www/html |
| worker\_processes | 1 | 1 |
| user | www-data | www-data |
| ssl\_ciphers | ECDHE-RSA-AES256-GCM-SHA512:DHE-RSA-AES256-GCM-SHA512:ECDHE-RSA-AES256-GCM-SHA384:DHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384 | ECDHE-RSA-AES256-GCM-SHA512:DHE-RSA-AES256-GCM-SHA512:ECDHE-RSA-AES256-GCM-SHA384:DHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384 |
| Gzip | On | On |
| Compression Level | 5 | 5 |
| gzip\_min\_length | 300 | 300 |
| gzip\_types | text/plain text/css text/xml text/javascript application/x-javascript application/xml image/svg+xml | text/\*, application/x-javascript, application/javascript, application/xml, image/svg+xml |
| keepalive\_timeout | 15 | 5 |
| ssl\_session\_timeout | 10m | On |
| ssl\_session\_cache | shared:SSL:10m | On |
| OCSP | On | On |

See our [Benchmarks Shootout](https://docs.google.com/spreadsheets/d/1WBNZ3z9rRxQgPgHYNdCjoAvAwqdhSgal3g6YXIyzCH0/edit#gid=1911036549) spreadsheet for more example configuration information.

## Run tests from the Client Server with your choice of tools[¶](#run-tests-from-the-client-server-with-your-choice-of-tools "Permanent link")

These are some recommended benchmarking tools. The parameters we've chosen to use from the Client Server, are intended to simulate real users as closely as possible.

### ApacheBench[¶](#apachebench "Permanent link")

#### Installation[¶](#installation "Permanent link")

Ubuntu:

```
apt-get install apache2-utils -y
```

CentOS:

```
yum install httpd-tools -y
```

#### Command[¶](#command "Permanent link")

```
ab -n 1000 -c 100 -k -H "Accept-Encoding: gzip,deflate" http://Test_Server_Domain/
```

Parameters :

- `-n`: Number of requests to perform for the benchmarking session
- `-c`: Number of multiple requests to perform at a time
- `-k`: Enable the HTTP KeepAlive feature
- `-H`: custom-header

Documentation: [Apache.org](http://httpd.apache.org/docs/2.2/programs/ab.html)

Output:

```
Server Software:        LiteSpeed
Server Hostname:        Test_Server_Domain
Server Port:            80

Document Path:          /
Document Length:        3749 bytes

Concurrency Level:      100
Time taken for tests:   0.210 seconds
Complete requests:      1000
Failed requests:        0
Keep-Alive requests:    1000
Total transferred:      4048000 bytes
HTML transferred:       3749000 bytes
Requests per second:    4756.31 [#/sec] (mean)
Time per request:       21.025 [ms] (mean)
Time per request:       0.210 [ms] (mean, across all concurrent requests)
Transfer rate:          18802.29 [Kbytes/sec] received
```

### Siege[¶](#siege "Permanent link")

#### Installation[¶](#installation_1 "Permanent link")

Ubuntu:

```
apt-get install siege -y
```

CentOS:

```
yum install epel-release
yum install siege -y
```

#### Command[¶](#command_1 "Permanent link")

```
siege -c 10 -r 100 -b http://Test_Server_Domain/
```

Parameters :

- `-b`: runs the test with NO DELAY for throughput benchmarking
- `-c`: Set the number of concurrent users
- `-r`: Allows you to run the siege for NUM repetitions

Output:

```
Transactions:                   6000 hits
Availability:                 100.00 %
Elapsed time:                   4.39 secs
Data transferred:             247.85 MB
Response time:                  0.00 secs
Transaction rate:            1366.74 trans/sec
Throughput:                    56.46 MB/sec
Concurrency:                    3.66
Successful transactions:        6000
Failed transactions:               0
Longest transaction:            0.03
Shortest transaction:           0.00
```

### h2load[¶](#h2load "Permanent link")

If you are specifically testing HTTP2, you may want to give h2load a try.

#### Installation[¶](#installation_2 "Permanent link")

Ubuntu:

```
apt-get update
apt-get install nghttp2-client -y
```

CentOS:

```
yum install epel-release
yum install nghttp2 -y
```

 For old OS version

You may need to build the h2load if Ubuntu version under 18 or CentOS under 7. Download source from <https://github.com/nghttp2/nghttp2.git>

#### Command[¶](#command_2 "Permanent link")

```
h2load -n 1000 -c 10 -t 1 -m 10 https://Test_Server_Domain/
```

Parameters :

- `-c`: Number of concurrent clients
- `-n`: Number of requests across all clients
- `-t`: Number of native threads
- `-m`: The max concurrent streams to issue per client

Output:

```
starting benchmark...
spawning thread #0: 100 total client(s). 10000 total requests
TLS Protocol: TLSv1.2
Cipher: ECDHE-RSA-AES256-GCM-SHA384
Server Temp Key: X25519 253 bits
Application protocol: h2
progress: 10% done
progress: 20% done
progress: 30% done
progress: 40% done
progress: 50% done
progress: 60% done
progress: 70% done
progress: 80% done
progress: 90% done
progress: 100% done

finished in 10.58s, 945.15 req/s, 47.52MB/s
requests: 10000 total, 10000 started, 10000 done, 10000 succeeded, 0 failed, 0 errored, 0 timeout
status codes: 10000 2xx, 0 3xx, 0 4xx, 0 5xx
traffic: 502.82MB (527242343) total, 140.02KB (143384) headers (space savings 95.72%), 501.64MB (526010000) data
```

### Jmeter[¶](#jmeter "Permanent link")

#### Installation[¶](#installation_3 "Permanent link")

Ubuntu:

```
apt install openjdk-11-jre-headless -y
```

CentOS:

```
yum install java-11-openjdk-devel -y
```

Common:

You can download it [here](http://jmeter.apache.org/download_jmeter.cgi). This example shows the installation of version 5.1.1, the install process is the same for other versions.

```
wget http://apache.osuosl.org//jmeter/binaries/apache-jmeter-5.1.1.tgz
tar xf apache-jmeter-*.tgz
cd apache-jmeter*/bin/
```

#### Command[¶](#command_3 "Permanent link")

Start JMeter in command line mode

```
./jmeter.sh -n -t examples/TESTPLAN.jmx
```

 Example of the Test Plan file
> `bash <?xml version="1.0" encoding="UTF-8"?> <jmeterTestPlan version="1.2" properties="5.0" jmeter="5.0 r1840935"> <hashTree> <TestPlan guiclass="TestPlanGui" testclass="TestPlan" testname="Test Plan" enabled="true"> <stringProp name="TestPlan.comments"></stringProp> <boolProp name="TestPlan.functional_mode">false</boolProp> <boolProp name="TestPlan.tearDown_on_shutdown">true</boolProp> <boolProp name="TestPlan.serialize_threadgroups">false</boolProp> <elementProp name="TestPlan.user_defined_variables" elementType="Arguments" guiclass="ArgumentsPanel" testclass="Arguments" testname="User Defined Variables" enabled="true"> <collectionProp name="Arguments.arguments"/> </elementProp> <stringProp name="TestPlan.user_define_classpath"></stringProp> </TestPlan> <hashTree> <ThreadGroup guiclass="ThreadGroupGui" testclass="ThreadGroup" testname="Thread Group" enabled="true"> <stringProp name="ThreadGroup.on_sample_error">continue</stringProp> <elementProp name="ThreadGroup.main_controller" elementType="LoopController" guiclass="LoopControlPanel" testclass="LoopController" testname="Loop Controller" enabled="true"> <boolProp name="LoopController.continue_forever">false</boolProp> <intProp name="LoopController.loops">-1</intProp> </elementProp> <stringProp name="ThreadGroup.num_threads">10</stringProp> <stringProp name="ThreadGroup.ramp_time">60</stringProp> <boolProp name="ThreadGroup.scheduler">true</boolProp> <stringProp name="ThreadGroup.duration">300</stringProp> <stringProp name="ThreadGroup.delay">0</stringProp> </ThreadGroup> <hashTree> <HTTPSamplerProxy guiclass="HttpTestSampleGui" testclass="HTTPSamplerProxy" testname="HTTP Request" enabled="true"> <elementProp name="HTTPsampler.Arguments" elementType="Arguments" guiclass="HTTPArgumentsPanel" testclass="Arguments" testname="User Defined Variables" enabled="true"> <collectionProp name="Arguments.arguments"/> </elementProp> <stringProp name="HTTPSampler.domain">hostname</stringProp> <stringProp name="HTTPSampler.port">80</stringProp> <stringProp name="HTTPSampler.protocol">http</stringProp> <stringProp name="HTTPSampler.contentEncoding"></stringProp> <stringProp name="HTTPSampler.path">/</stringProp> <stringProp name="HTTPSampler.method">GET</stringProp> <boolProp name="HTTPSampler.follow_redirects">true</boolProp> <boolProp name="HTTPSampler.auto_redirects">false</boolProp> <boolProp name="HTTPSampler.use_keepalive">true</boolProp> <boolProp name="HTTPSampler.DO_MULTIPART_POST">false</boolProp> <boolProp name="HTTPSampler.BROWSER_COMPATIBLE_MULTIPART">true</boolProp> <stringProp name="HTTPSampler.embedded_url_re"></stringProp> <stringProp name="HTTPSampler.connect_timeout"></stringProp> <stringProp name="HTTPSampler.response_timeout"></stringProp> </HTTPSamplerProxy> <hashTree/> <HeaderManager guiclass="HeaderPanel" testclass="HeaderManager" testname="HTTP Header Manager" enabled="true"> <collectionProp name="HeaderManager.headers"> <elementProp name="" elementType="Header"> <stringProp name="Header.name">Accept-Encoding</stringProp> <stringProp name="Header.value">gzip, deflate, sdch</stringProp> </elementProp> </collectionProp> </HeaderManager> <hashTree/> </hashTree> </hashTree> </hashTree> </jmeterTestPlan>`

Parameters :

- `-n`: Specified HNeter is to run in command line mode
- `-t`: Name of the file that contains the Test Plan

Output:

```
summary +      1 in 00:00:00 =    2.5/s Avg:    58 Min:    58 Max:    58 Err:     0 (0.00%) Active: 1 Started: 1 Finished: 0
summary +  45568 in 00:00:25 = 1851.0/s Avg:     1 Min:     0 Max:    17 Err:     0 (0.00%) Active: 5 Started: 5 Finished: 0
summary =  45569 in 00:00:25 = 1820.8/s Avg:     1 Min:     0 Max:    58 Err:     0 (0.00%)
summary + 107678 in 00:00:30 = 3589.4/s Avg:     1 Min:     0 Max:    18 Err:     0 (0.00%) Active: 10 Started: 10 Finished: 0
summary = 153247 in 00:00:55 = 2785.0/s Avg:     1 Min:     0 Max:    58 Err:     0 (0.00%)
```

### wrk[¶](#wrk "Permanent link")

wrk is a modern HTTP benchmarking tool capable of generating significant load when run on a single multi-core CPU.

#### Installation[¶](#installation_4 "Permanent link")

Ubuntu:

```
apt-get install build-essential libssl-dev git -y
```

CentOS:

```
yum groupinstall 'Development Tools'
yum install -y openssl-devel git
```

Common:

```
git clone https://github.com/wg/wrk.git wrk && cd wrk
make
```

#### Command[¶](#command_4 "Permanent link")

```
wrk -c100 -t1 -d10s http://Test_Server_Domain/
```

Parameters :

- `-c`: Total number of HTTP connections to keep open with each thread
- `-t`: Total number of threads
- `-d`: Duration of the test

Output:

```
Running 10s test @ http://Test_Server_Domain/
  1 threads and 100 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency    19.62ms    0.98ms  34.28ms   93.53%
    Req/Sec     5.11k   179.79     5.31k    91.00%
  50870 requests in 10.00s, 542.09MB read
Requests/sec:   5084.80
Transfer/sec:     54.19MB
```
