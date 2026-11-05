# Registro de Alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/doc.changelog.php

---

# Registro de Alterações

As alterações a seguir foram feitas em funções de
extensões nativas

| Version | Function | Description |
| --- | --- | --- |
| 8.5.0 | [array\_key\_exists](function.array-key-exists.md) | Usar null no parâmetro key foi descontinuado, use uma string vazia no lugar. |
|  | [array\_multisort](function.array-multisort.md) | Agora o tipo de retorno é true, antes era bool. |
|  | [chr](function.chr.md) | Passar inteiros fora do intervalo [0, 255] foi descontinuado. |
|  | [cli\_set\_process\_title](function.cli-set-process-title.md) | cli\_set\_process\_title agora emite um E\_WARNING ao definir um título muito longo para um processo; anteriormente o título seria truncado. |
|  | [closedir](function.closedir.md) | Usar null para dir\_handle foi descontinuado. Em vez disso, o manipulador do último diretório aberto deve ser fornecido explicitamente. |
|  | [curl\_close](function.curl-close.md) | Esta função foi descontinuada. |
|  | [curl\_multi\_get\_handles](function.curl-multi-get-handles.md) | The function was added. |
|  | [curl\_share\_close](function.curl-share-close.md) | Esta função foi descontinuada. |
|  | [exif\_imagetype](function.exif-imagetype.md) | Adicionado suporte a HEIF. |
|  | [finfo\_buffer](function.finfo-buffer.md) | O parâmetro context foi descontinuado e é ignorado. |
|  | [finfo\_close](function.finfo-close.md) | Esta função foi descontinuada. |
|  | [finfo\_close](function.finfo-close.md) | Agora o tipo de retorno é true; antes era bool. |
|  | [ftp\_set\_option](function.ftp-set-option.md) | Agora o tipo de retorno é true; antes era bool. |
|  | [gc\_collect\_cycles](function.gc-collect-cycles.md) | O valor de retorno não mais inclui strings e recursos que foram indiretamente coletados através dos ciclos. |
|  | [get\_defined\_functions](function.get-defined-functions.md) | O parâmetro exclude\_disabled foi descontinuado, pois não tem mais efeito. |
|  | [grapheme\_levenshtein](function.grapheme-levenshtein.md) | This function has been added. |
|  | [grapheme\_stripos](function.grapheme-stripos.md) | O parâmetro opcional locale foi adicionado. |
|  | [grapheme\_stristr](function.grapheme-stristr.md) | O parâmetro opcional locale foi adicionado. |
|  | [grapheme\_strpos](function.grapheme-strpos.md) | O parâmetro opcional locale foi adicionado. |
|  | [grapheme\_strripos](function.grapheme-strripos.md) | O parâmetro opcional locale foi adicionado. |
|  | [grapheme\_strrpos](function.grapheme-strrpos.md) | O parâmetro opcional locale foi adicionado. |
|  | [grapheme\_strstr](function.grapheme-strstr.md) | O parâmetro opcional locale foi adicionado. |
|  | [grapheme\_substr](function.grapheme-substr.md) | O parâmetro opcional locale foi adicionado. |
|  | [gzfile](function.gzfile.md) | use\_include\_path agora é do tipo bool. Anteriormente era do tipo int. |
|  | [gzopen](function.gzopen.md) | use\_include\_path agora é do tipo bool. Anteriormente era do tipo int. |
|  | [imagecopyresampled](function.imagecopyresampled.md) | O tipo de retorno agora é true; anteriormente era bool. |
|  | [imagedestroy](function.imagedestroy.md) | Esta função foi descontinuada. |
|  | [ldap\_get\_option](function.ldap-get-option.md) | ldap agora pode ser nulo. |
|  | [libxml\_set\_external\_entity\_loader](function.libxml-set-external-entity-loader.md) | Agora o tipo de retorno é true; antes era bool. |
|  | [openssl\_cms\_encrypt](function.openssl-cms-encrypt.md) | cipher\_algo agora é do tipo int ou string. Anteriormente, era do tipo int. |
|  | [openssl\_pkey\_derive](function.openssl-pkey-derive.md) | O parâmetro key\_length foi descontinuado. |
|  | [openssl\_private\_decrypt](function.openssl-private-decrypt.md) | O parâmetro opcional digest\_algo foi adicionado. |
|  | [openssl\_public\_encrypt](function.openssl-public-encrypt.md) | O parâmetro opcional digest\_algo foi adicionado. |
|  | [openssl\_sign](function.openssl-sign.md) | O parâmetro opcional padding foi adicionado. |
|  | [openssl\_verify](function.openssl-verify.md) | O parâmetro opcional padding foi adicionado. |
|  | [ord](function.ord.md) | Passar uma string que não seja um byte único foi descontinuado. |
|  | [pcntl\_waitid](function.pcntl-waitid.md) | resource\_usage foi adicionado. |
|  | [pg\_copy\_from](function.pg-copy-from.md) | rows agora é do tipo iterable. Anteriormente era do tipo array. |
|  | [posix\_fpathconf](function.posix-fpathconf.md) | Agora define last\_error como EBADF e emite um E\_WARNING quando um descritor de arquivo inválido é encontrado. |
|  | [posix\_isatty](function.posix-isatty.md) | Agora emite um E\_WARNING quando um file\_descriptor inválido é encontrado. |
|  | [posix\_kill](function.posix-kill.md) | Agora lança um ValueError quando process\_id é maior ou menor do que a plataforma suporta (inteiro com sinal ou longo). |
|  | [posix\_setpgid](function.posix-setpgid.md) | Agora lança um ValueError quando process\_id ou process\_group\_id são menores que zero ou maiores do que a plataforma suporta. |
|  | [posix\_setrlimit](function.posix-setrlimit.md) | Agora lança um ValueError quando hard\_limit ou soft\_limit são menores que -1 ou quando soft\_limit é maior que hard\_limit. |
|  | [posix\_ttyname](function.posix-ttyname.md) | last\_error agora é definido para EBADF quando um file\_descriptor inválido é encontrado. |
|  | [readdir](function.readdir.md) | Usar null para dir\_handle foi descontinuado. Em vez disso, o manipulador do último diretório aberto deve ser fornecido explicitamente. |
|  | [readgzfile](function.readgzfile.md) | use\_include\_path agora é do tipo bool. Anteriormente era do tipo int. |
|  | [readline\_add\_history](function.readline-add-history.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [readline\_callback\_handler\_install](function.readline-callback-handler-install.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [readline\_clear\_history](function.readline-clear-history.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [rewinddir](function.rewinddir.md) | Usar null para dir\_handle foi descontinuado. Em vez disso, o manipulador do último diretório aberto deve ser fornecido explicitamente. |
|  | [setlocale](function.setlocale.md) | Passar um inteiro 0 como o argumento de locales não é mais suportado e agora lança um TypeError. |
|  | [shm\_detach](function.shm-detach.md) | Agora o tipo de retorno é true; antes era bool. |
|  | [snmp2\_get](function.snmp2-get.md) | Agora lança um ValueError quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |
|  | [snmp2\_set](function.snmp2-set.md) | Agora lança um ValueError quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |
|  | [snmp3\_get](function.snmp3-get.md) | Agora lança um ValueError quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |
|  | [snmp3\_set](function.snmp3-set.md) | Agora lança um ValueError quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |
|  | [snmpget](function.snmpget.md) | Agora lança um ValueError quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |
|  | [snmpset](function.snmpset.md) | Agora lança um ValueError quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |
|  | [socket\_addrinfo\_lookup](function.socket-addrinfo-lookup.md) | Agora lança um TypeError se qualquer valor do array hints não puder ser convertido para inteiro, e pode lançar um ValueError se quaisquer desses valores transbordarem. |
|  | [socket\_bind](function.socket-bind.md) | Agora lança um ValueError quando port é menor que 0 ou maior que 65535. |
|  | [socket\_create](function.socket-create.md) | Agora suporta a criação de soquetes da família AF\_PACKET. |
|  | [socket\_create\_listen](function.socket-create-listen.md) | Agora lança um ValueError quando port é menor que 0 ou maior que 65535. |
|  | [socket\_getsockname](function.socket-getsockname.md) | Agora recupera o índice da interface e sua representação em string quando usado em um soquete da família AF\_PACKET. |
|  | [socket\_sendto](function.socket-sendto.md) | Agora lança um ValueError quando port é menor que 0 ou maior que 65535. |
|  | [socket\_set\_option](function.socket-set-option.md) | Agora lança uma exceção quando MCAST\_LEAVE\_GROUP ou MCAST\_LEAVE\_SOURCE\_GROUP são usadas e o valor não é um array ou objeto válido, e lança um ValueError quando uma opção de multitransmissão é usada em um soquete que não é da família AF\_INET ou da AF\_INET6. |
|  | [spl\_autoload\_unregister](function.spl-autoload-unregister.md) | Passa a função spl\_autoload\_call como um argumento de chamada de retorno para desregistrar todos os autocarregadores foi descontinuado. Em vez disso, faça uma iteração através do valor de retorno de spl\_autoload\_functions e chame spl\_autoload\_unregister com cada valor. |
|  | [xml\_parser\_free](function.xml-parser-free.md) | Esta função foi descontinuada. |
|  | [IntlListFormatter::\_\_construct](intllistformatter.construct.md) | A classe foi adicionada. |
|  | [Locale::isRightToLeft](locale.isrighttoleft.md) | Adicionado o método Locale::isRightToLeft. |
|  | [Pdo\Pgsql::copyFromArray](pdo-pgsql.copyfromarray.md) | rows agora aceira um Traversable; anteriormente somente um array era aceito. |
|  | [PDO::pgsqlCopyFromArray](pdo.pgsqlcopyfromarray.md) | O parâmetro rows agora aceita um Traversable; anteriormente somente um array era aceito. |
|  | [ReflectionClass::getConstant](reflectionclass.getconstant.md) | Chamar ReflectionClass::getConstant para constantes que não existem foi descontinuado. |
|  | [ReflectionConstant::getAttributes](reflectionconstant.getattributes.md) | Este método foi introduzido. |
|  | [ReflectionMethod::setAccessible](reflectionmethod.setaccessible.md) | Este método foi descontinuado, já que não tem mais efeito. |
|  | [ReflectionProperty::getDefaultValue](reflectionproperty.getdefaultvalue.md) | Chamar ReflectionProperty::getDefaultValue para propriedades sem valor padrão foi descontinuado. |
|  | [ReflectionProperty::getMangledName](reflectionproperty.getmangledname.md) | Este método foi introduzido. |
|  | [ReflectionProperty::setAccessible](reflectionproperty.setaccessible.md) | Este método foi descontinuado, já que não tem mais efeito. |
|  | [SoapClient::\_\_doRequest](soapclient.dorequest.md) | O parâmetro opcional uriParserClass foi adicionado. |
|  | [SoapFault::\_\_construct](soapfault.construct.md) | O parâmetro opcional lang foi adicionado para estar em conformidade com a especificação SOAP 1.2. |
|  | [SoapServer::fault](soapserver.fault.md) | O parâmetro opcional lang foi adicionado para estar em conformidade com a especificação SOAP 1.2. |
|  | [SplFileObject::fwrite](splfileobject.fwrite.md) | length agora pode ser nulo. |
|  | [SplObjectStorage::attach](splobjectstorage.attach.md) | Este método foi descontinuado em favor de SplObjectStorage::offsetSet. |
|  | [SplObjectStorage::contains](splobjectstorage.contains.md) | Este método foi descontinuado em favor de SplObjectStorage::offsetExists. |
|  | [SplObjectStorage::detach](splobjectstorage.detach.md) | Este método foi descontinuado em favor de SplObjectStorage::offsetUnset. |
|  | [SQLite3Stmt::busy](sqlite3stmt.busy.md) | This method was added. |
| 8.4.0 | [DateInterval::createFromDateString](dateinterval.createfromdatestring.md) | Agora possui um tipo de retorno provisório de DateInterval. Anteriormente era DateIntervalfalse. |
|  | [DatePeriod::\_\_construct](dateperiod.construct.md) | A assinatura que usa isostr foi descontinuada, use DatePeriod::createFromISO8601String em seu lugar. |
|  | [DateTime::modify](datetime.modify.md) | Agora tem o tipo de retorno provisório DateTime. Anteriormente era DateTimefalse. |
|  | [DateTimeImmutable::modify](datetimeimmutable.modify.md) | Agora tem um tipo de retorno provisório DateTimeImmutable. Anteriormente era DateTimeImmutablefalse. |
|  | [DOMDocument::registerNodeClass](domdocument.registernodeclass.md) | DOMDocument::registerNodeClass agora tem um tipo de retorno provisório de true. |
|  | [DOMImplementation::createDocument](domimplementation.createdocument.md) | A função agora tem um tipo de retorno provisório de DOMDocument. |
|  | [DOMXPath::registerPhpFunctions](domxpath.registerphpfunctions.md) | Agora é possível usar callables para funções de retorno ao usar restrict com entradas de array. |
|  |  | Nomes de retorno de chamada inválidos agora lançam uma exceção ValueError. Passar uma entrada que não pode ser chamada agora lança uma exceção TypeError. |
|  | [bcpow](function.bcpow.md) | Potências negativas de 0 anteriormente retornavam 0, mas agora lançam uma exceção DivisionByZeroError. |
|  | [bind\_textdomain\_codeset](function.bind-textdomain-codeset.md) | Agora lança um ValueError se domain for uma string vazia. |
|  | [bind\_textdomain\_codeset](function.bind-textdomain-codeset.md) | codeset agora é opcional. Anteriormente, sempre tinha que ser especificado. |
|  | [bindtextdomain](function.bindtextdomain.md) | directory agora é opcional. Anteriormente, sempre tinha que ser especificado. |
|  | [curl\_getinfo](function.curl-getinfo.md) | Introduzida a constante CURLINFO\_POSTTRANSFER\_TIME\_T e a chave posttransfer\_time\_us (Curl 8.10.0 ou posterior). |
|  | [curl\_multi\_select](function.curl-multi-select.md) | Agora lança um ValueError se timeout for menor que 0 ou maior que PHP\_INT\_MAX. |
|  | [curl\_setopt](function.curl-setopt.md) | CURLOPT\_DNS\_USE\_GLOBAL\_CACHE não tem mais qualquer efeito, e habilitála em compilações PHP seguras para threads não dispara mais um alerta. |
|  | [curl\_version](function.curl-version.md) | Chave features\_list adicionada. |
|  | [dba\_close](function.dba-close.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_delete](function.dba-delete.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_exists](function.dba-exists.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_fetch](function.dba-fetch.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_firstkey](function.dba-firstkey.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_insert](function.dba-insert.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_key\_split](function.dba-key-split.md) | Passar null ou false em key agora está descontinuado. |
|  | [dba\_nextkey](function.dba-nextkey.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_open](function.dba-open.md) | Retorna agora uma instância de Dba\Connection; anteriormente, retornava um resource. |
|  | [dba\_optimize](function.dba-optimize.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_popen](function.dba-popen.md) | Retorna agora uma instância de Dba\Connection; anteriormente, retornava um resource. |
|  | [dba\_replace](function.dba-replace.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [dba\_sync](function.dba-sync.md) | O parâmetro dba agora espera uma instância deDba\Connection; anteriormente, um resource dba válido era esperado. |
|  | [debug\_zval\_dump](function.debug-zval-dump.md) | debug\_zval\_dump agora indica se um array é compactado (packed). |
|  | [dgettext](function.dgettext.md) | Agora lança um ValueError se domain for uma string vazia. |
|  | [dngettext](function.dngettext.md) | Agora lança um ValueError se domain for uma string vazia. |
|  | [exit](function.exit.md) | exit agora é uma função verdadeira, portanto segue a conversão automática de tipos usual, é afetada pela declaração strict\_types, pode ser chamada com argumentos nomeados, e pode ser uma função variável. |
|  | [exit](function.exit.md) | Uma chamada a exit sem parâmetros de dentro de funções de desligamento ou de destrutores de objetos agora redefine o código de saída para 0; anteriormente, o código de saída definido por uma chamada anterior de exit era mantido. |
|  | [fgetcsv](function.fgetcsv.md) | Depender do valor padrão de escape agora está descontinuado. |
|  | [flush](function.flush.md) | Descarregar cabeçalhos sem um corpo agora terá sucesso no FastCGI. |
|  | [fputcsv](function.fputcsv.md) | Depender do valor padrão de escape agora está descontinuado. |
|  | [hash\_init](function.hash-init.md) | Passar opções de um tipo errado foi descontinuado. |
|  | [hash\_update](function.hash-update.md) | Agora tem um tipo de retorno de true em vez de bool. |
|  | [highlight\_string](function.highlight-string.md) | O tipo de retorno foi alterado de stringbool para stringtrue. |
|  | [http\_build\_query](function.http-build-query.md) | Anteriormente ao PHP 8.4.0, a propriedades BackedEnum de data eram convertidas para objetos, em vez de seus equivalentes escalares. |
|  | [idn\_to\_ascii](function.idn-to-ascii.md) | Agora lança um ValueError se o parâmetro domain for vazio. |
|  | [idn\_to\_ascii](function.idn-to-ascii.md) | Agora lança um ValueError se o parâmetro variant não for INTL\_IDNA\_VARIANT\_UTS46. |
|  | [idn\_to\_utf8](function.idn-to-utf8.md) | Agora lança um ValueError se o parâmetro domain for vazio. |
|  | [idn\_to\_utf8](function.idn-to-utf8.md) | Agora lança um ValueError se o parâmetro variant não for INTL\_IDNA\_VARIANT\_UTS46. |
|  | [imageavif](function.imageavif.md) | Agora lança um ValueError se quality ou speed forem inválidos. |
|  | [imagefilter](function.imagefilter.md) | Agora lança um ValueError se sub ou plus puderem causar um estouro de limites com IMG\_FILTER\_SCATTER definido em filter. |
|  | [imagejpeg](function.imagejpeg.md) | Agora lança um ValueError se quality for inválido. |
|  | [imagepng](function.imagepng.md) | Agora lança uma exceção ValueError se quality for inválido. |
|  | [imagescale](function.imagescale.md) | Agora lança uma ValueError se width ou height puderem causar um estouro de limites. |
|  | [imagescale](function.imagescale.md) | Agora lança uma ValueError se mode for inválido. |
|  | [imagewebp](function.imagewebp.md) | Agora lança um ValueError se quality for inválido. |
|  | [lcg\_value](function.lcg-value.md) | Esta função foi descontinuada. |
|  | [ldap\_connect](function.ldap-connect.md) | Chamar ldap\_connect com mais de dois argumentos foi descontinuado. |
|  | [ldap\_exop](function.ldap-exop.md) | O uso de mais de 4 parâmetros foi descontinuado. Use ldap\_exop\_sync em vez disso. |
|  | [libxml\_set\_streams\_context](function.libxml-set-streams-context.md) | libxml\_set\_streams\_context agora lança um TypeError quando um recurso que não seja um fluxo é passado no parâmetro context, ao invés de lançar posteriormente quando o contexto é usado. |
|  | [long2ip](function.long2ip.md) | O tipo do retorno foi alterado de stringfalse para string. |
|  | [mb\_decode\_numericentity](function.mb-decode-numericentity.md) | mb\_decode\_numericentity agora lança uma exceção ValueError se map não for uma lista de ints. |
|  | [mb\_encode\_numericentity](function.mb-encode-numericentity.md) | mb\_encode\_numericentity agora lança uma exceção ValueError se map não for uma lista de ints. |
|  | [mb\_http\_output](function.mb-http-output.md) | mb\_http\_output agora lança uma exceção ValueError se encoding contiver bytes nulos. |
|  | [mb\_strcut](function.mb-strcut.md) | O comportamento agora é mais consistente em strings UTF-8 e UTF-16 inválidas. |
|  | [mb\_substr](function.mb-substr.md) | Em strings inválidas (aquelas com erros de codificação), os índices de caractere agora são interpretados da mesma maneira que a maioria das outras funções mbstring. Isso significa que os índices de caractere retornados por mb\_strpos podem ser passados diretamente. |
|  | [odbc\_autocommit](function.odbc-autocommit.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_binmode](function.odbc-binmode.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_close](function.odbc-close.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_columnprivileges](function.odbc-columnprivileges.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_columns](function.odbc-columns.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_commit](function.odbc-commit.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_connect](function.odbc-connect.md) | Esta função agora retorna uma instância de Odbc\Connection; anteriormente, retornava um resource. |
|  | [odbc\_connect](function.odbc-connect.md) | user e password agora podem ser nulos e também são opcionais e têm o valor padrão null. |
|  | [odbc\_connect](function.odbc-connect.md) | Anteriormente, usar uma string vazia para password não incluiria pwd na string de conexão gerada para dsn. Agora é gerada para uncluir um pwd que tem uma string vazia como seu valor. Para restaurar o comportamento anterior, password agora pode ser definido para null. |
|  | [odbc\_connect](function.odbc-connect.md) | Anteriormente, se dsn contivesse uid ou pwd, os parâmetros user e password seriam ignorados. Agora, user somente é ignorado se dsn contiver uid, e password somente é ignorado se dsn contiver pwd. |
|  | [odbc\_cursor](function.odbc-cursor.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_data\_source](function.odbc-data-source.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_error](function.odbc-error.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_errormsg](function.odbc-errormsg.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_exec](function.odbc-exec.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_exec](function.odbc-exec.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_execute](function.odbc-execute.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_fetch\_array](function.odbc-fetch-array.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_fetch\_array](function.odbc-fetch-array.md) | row agora pode ser nulo e seu valor padrão mudou de -1 para null, consistente com odbc\_fetch\_row. |
|  | [odbc\_fetch\_into](function.odbc-fetch-into.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_fetch\_into](function.odbc-fetch-into.md) | row agora pode ser nulo e seu valor padrão mudou de 0 para null, consistente com odbc\_fetch\_row. |
|  | [odbc\_fetch\_object](function.odbc-fetch-object.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_fetch\_object](function.odbc-fetch-object.md) | row agora pode ser nulo e seu valor padrão mudou de -1 para null, consistente com odbc\_fetch\_row. |
|  | [odbc\_fetch\_row](function.odbc-fetch-row.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_fetch\_row](function.odbc-fetch-row.md) | Um E\_WARNING agora é emitido quando row for menor ou igual a zero. |
|  | [odbc\_field\_len](function.odbc-field-len.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_field\_name](function.odbc-field-name.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_field\_num](function.odbc-field-num.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_field\_scale](function.odbc-field-scale.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_field\_type](function.odbc-field-type.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_foreignkeys](function.odbc-foreignkeys.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_foreignkeys](function.odbc-foreignkeys.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_free\_result](function.odbc-free-result.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_gettypeinfo](function.odbc-gettypeinfo.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_gettypeinfo](function.odbc-gettypeinfo.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_longreadlen](function.odbc-longreadlen.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_next\_result](function.odbc-next-result.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_num\_fields](function.odbc-num-fields.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_num\_rows](function.odbc-num-rows.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_pconnect](function.odbc-pconnect.md) | Esta função agora retorna uma instância de Odbc\Connection; anteriormente, retornava um resource. |
|  | [odbc\_pconnect](function.odbc-pconnect.md) | user e password agora podem ser nulos e também são opcionais e têm o valor padrão null. |
|  | [odbc\_pconnect](function.odbc-pconnect.md) | Anteriormente, usar uma string vazia para password não incluiria pwd na string de conexão gerada para dsn. Agora é gerada para uncluir um pwd que tem uma string vazia como seu valor. Para restaurar o comportamento anterior, password agora pode ser definido para null. |
|  | [odbc\_pconnect](function.odbc-pconnect.md) | Anteriormente, se dsn contivesse uid ou pwd, os parâmetros user e password seriam ignorados. Agora, user somente é ignorado se dsn contiver uid, e password somente é ignorado se dsn contiver pwd. |
|  | [odbc\_prepare](function.odbc-prepare.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_prepare](function.odbc-prepare.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_primarykeys](function.odbc-primarykeys.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_primarykeys](function.odbc-primarykeys.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_procedurecolumns](function.odbc-procedurecolumns.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_procedurecolumns](function.odbc-procedurecolumns.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_procedures](function.odbc-procedures.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_procedures](function.odbc-procedures.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_result](function.odbc-result.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_result\_all](function.odbc-result-all.md) | statement agora espera uma instância de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_rollback](function.odbc-rollback.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_setoption](function.odbc-setoption.md) | odbc agora espera uma instância de Odbc\Connection ou de Odbc\Result; anteriormente, esperava um resource. |
|  | [odbc\_specialcolumns](function.odbc-specialcolumns.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_specialcolumns](function.odbc-specialcolumns.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_statistics](function.odbc-statistics.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_statistics](function.odbc-statistics.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_tableprivileges](function.odbc-tableprivileges.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_tableprivileges](function.odbc-tableprivileges.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [odbc\_tables](function.odbc-tables.md) | odbc agora espera uma instância de Odbc\Connection; anteriormente, esperava um resource. |
|  | [odbc\_tables](function.odbc-tables.md) | Esta função agora retorna uma instância de Odbc\Result; anteriormente, retornava um resource. |
|  | [openssl\_csr\_new](function.openssl-csr-new.md) | O array associativo do parâmetro distinguished\_names agora suporta arrays como valores, permitindo que múltiplos sejam especificados para um único atributo. |
|  | [openssl\_csr\_new](function.openssl-csr-new.md) | O parâmetro extra\_attributes agora define corretamente os atributos CSR, ao invés de modificar o Nome Distinto do assunto como fazia antes incorretamente. |
|  | [openssl\_csr\_sign](function.openssl-csr-sign.md) | O parâmetro serial\_hex foi adicionado. |
|  | [openssl\_password\_hash](function.openssl-password-hash.md) | Função adicionada. |
|  | [openssl\_password\_verify](function.openssl-password-verify.md) | Função adicionada. |
|  | [openssl\_pkey\_get\_details](function.openssl-pkey-get-details.md) | Adicionado suporte às chaves baseadas em Curve25519 e Curve448. Especificamente, os campos x25519, ed25519, x448 e ed448 foram introduzidos. |
|  | [openssl\_pkey\_new](function.openssl-pkey-new.md) | Adicionado suporte para chaves baseadas em Curve25519 e Curve448 com a instrodução dos campos x25519, ed25519, x448 e ed448. |
|  | [openssl\_x509\_parse](function.openssl-x509-parse.md) | A análise de certificado sem os segundos no horário UTC não é mais permitida para nenhuma versão do OpenSSL. Já não era permitida para as versões 3.3+ do OpenSSL. |
|  | [password\_hash](function.password-hash.md) | O valor padrão da opção cost do algoritmo PASSWORD\_BCRYPT foi aumentado de 10 para 12. |
|  | [pcntl\_sigprocmask](function.pcntl-sigprocmask.md) | Um ValueError é lançado se signal estiver vazio. |
|  | [pcntl\_sigprocmask](function.pcntl-sigprocmask.md) | Um TypeError é lançado se o valor signal não for um int. |
|  | [pcntl\_sigprocmask](function.pcntl-sigprocmask.md) | Um ValueError é lançado se o valor signal for inválido. |
|  | [pcntl\_sigprocmask](function.pcntl-sigprocmask.md) | Um ValueError é lançado se o valor de mode não for SIG\_BLOCK, SIG\_UNBLOCK ou SIG\_SETMASK. |
|  | [pcntl\_sigtimedwait](function.pcntl-sigtimedwait.md) | Um ValueError é lançado se signal estiver vazio. |
|  | [pcntl\_sigtimedwait](function.pcntl-sigtimedwait.md) | Um TypeError é lançado se o valor signal não for um int. |
|  | [pcntl\_sigtimedwait](function.pcntl-sigtimedwait.md) | Um ValueError é lançado se o valor signal for inválido. |
|  | [pcntl\_sigtimedwait](function.pcntl-sigtimedwait.md) | Um ValueError é lançado se o valor seconds for menor que 0. |
|  | [pcntl\_sigtimedwait](function.pcntl-sigtimedwait.md) | Um ValueError é lançado se o valor nanoseconds for menor que 0. |
|  | [pcntl\_sigtimedwait](function.pcntl-sigtimedwait.md) | Um ValueError é lançado se os valores seconds e nanoseconds forem 0. |
|  | [pcntl\_sigwaitinfo](function.pcntl-sigwaitinfo.md) | Um ValueError é lançado se signal estiver vazio. |
|  | [pcntl\_sigwaitinfo](function.pcntl-sigwaitinfo.md) | Um TypeError é lançado se o valor signal não for um int. |
|  | [pcntl\_sigwaitinfo](function.pcntl-sigwaitinfo.md) | Um ValueError é lançado se o valor signal for inválido. |
|  | [pg\_fetch\_result](function.pg-fetch-result.md) | A assinatura com dois argumentos da função pg\_fetch\_result (result, field) foi descontinuada. Em seu lugar, use a assinatura com três argumentos definindo row para null. |
|  | [pg\_field\_is\_null](function.pg-field-is-null.md) | A assinatura com dois argumentos da função pg\_field\_is\_null (result, field) foi descontinuada. Em seu lugar, use a assinatura com três argumentos definindo row para null. |
|  | [pg\_field\_prtlen](function.pg-field-prtlen.md) | A assinatura com dois argumentos da função pg\_field\_prtlen (result, field\_name\_or\_number) foi descontinuada. Em seu lugar, use a assinatura com três argumentos definindo row para null. |
|  | [pg\_select](function.pg-select.md) | conditions agora é opcional. |
|  | [php\_uname](function.php-uname.md) | Lança um ValueError quando um mode inválido for especificado. |
|  | [posix\_isatty](function.posix-isatty.md) | Define o número de erro para EBADF quando o fluxo/descritor de arquivo informado for inválido. |
|  | [pow](function.pow.md) | Elevar 0 a um exponent negativo agora foi descontinuado. |
|  | [print\_r](function.print-r.md) | O tipo de retorno foi alterado de stringbool para stringtrue. |
|  | [round](function.round.md) | Quatro novos modos de arredondamento foram adicionados. |
|  | [round](function.round.md) | Agora lança uma exceção ValueError se mode for inválido. |
|  | [session\_set\_save\_handler](function.session-set-save-handler.md) | Chamar session\_set\_save\_handler com mais de dois argumentos agora foi descontinuado. Use a assinatura com dois argumentos. |
|  | [simplexml\_import\_dom](function.simplexml-import-dom.md) | Adicionado suporte para Dom\Document. |
|  | [simplexml\_import\_dom](function.simplexml-import-dom.md) | Esta função agora lança um TypeError ao invés de um ValueError quando for passado um node que não seja XML ou HTML. |
|  | [socket\_create\_listen](function.socket-create-listen.md) | O valor padrão de backlog agora é SOMAXCONN. Anteriormente era 128. |
|  | [str\_getcsv](function.str-getcsv.md) | Depender do valor padrão de escape agora está descontinuado. |
|  | [str\_getcsv](function.str-getcsv.md) | Agora lança um ValueError se separator, enclosure, ou escape for inválido. Isto imita o comportamento de fgetcsv e de fputcsv. |
|  | [strcspn](function.strcspn.md) | Antes do PHP 8.4.0, quando characters fosse uma string vazia, a pesquisa incorretamente encerraria no primeiro byte nulo em string. |
|  | [stream\_bucket\_append](function.stream-bucket-append.md) | bucket agora espera uma instância de StreamBucket; anteriormente, esperava um stdClass. |
|  | [stream\_bucket\_make\_writeable](function.stream-bucket-make-writeable.md) | Esta função agora retorna uma instância de StreamBucket; anteriormente, retornava um stdClass. |
|  | [stream\_bucket\_new](function.stream-bucket-new.md) | Esta função agora retorna uma instância de StreamBucket; anteriormente, retornava um stdClass. |
|  | [stream\_bucket\_prepend](function.stream-bucket-prepend.md) | bucket agora espera uma instância de StreamBucket; anteriormente, esperava um stdClass. |
|  | [stream\_context\_set\_option](function.stream-context-set-option.md) | A assinatura alternativa de 2 parâmetros agora foi descontinuada. Use stream\_context\_set\_options em seu lugar. |
|  | [tempnam](function.tempnam.md) | O nome dos arquivos criados por tempnam agora é 13 bytes mais longo. O comprimento total ainda depende da plataforma. |
|  | [textdomain](function.textdomain.md) | Agora lança um ValueError se domain for uma string vazia. |
|  | [textdomain](function.textdomain.md) | domain agora é opcional. Anteriormente, sempre tinha que ser especificado. |
|  | [trigger\_error](function.trigger-error.md) | Passar E\_USER\_ERROR como error\_level agora foi descontinuado. Alternativamente, uma Exception pode ser lançada ou exit pode ser chamada. |
|  | [trigger\_error](function.trigger-error.md) | A função agora tem um tipo de retorno true ao invés de bool. |
|  | [unserialize](function.unserialize.md) | Agora lança exceções TypeError e ValueError se o elemento allowed\_classes de options não for um array de nomes de classes nem um bool. |
|  | [unserialize](function.unserialize.md) | Desserializar strings usando a tag maiúscula "S" foi descontinuado; use a tag minúscula "s" em vez disso. |
|  | [xml\_parser\_set\_option](function.xml-parser-set-option.md) | Adicionada a opção XML\_OPTION\_PARSE\_HUGE. |
|  | [xml\_set\_character\_data\_handler](function.xml-set-character-data-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_character\_data\_handler](function.xml-set-character-data-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [xml\_set\_default\_handler](function.xml-set-default-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_default\_handler](function.xml-set-default-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [xml\_set\_element\_handler](function.xml-set-element-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_element\_handler](function.xml-set-element-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [xml\_set\_end\_namespace\_decl\_handler](function.xml-set-end-namespace-decl-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_end\_namespace\_decl\_handler](function.xml-set-end-namespace-decl-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [xml\_set\_external\_entity\_ref\_handler](function.xml-set-external-entity-ref-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_external\_entity\_ref\_handler](function.xml-set-external-entity-ref-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [xml\_set\_notation\_decl\_handler](function.xml-set-notation-decl-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_notation\_decl\_handler](function.xml-set-notation-decl-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [xml\_set\_object](function.xml-set-object.md) | Esta função agora foi descontinuada, deve-se passar valores do tipo callable apropriados para xml\_set\_. |
|  | [xml\_set\_processing\_instruction\_handler](function.xml-set-processing-instruction-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_processing\_instruction\_handler](function.xml-set-processing-instruction-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [xml\_set\_start\_namespace\_decl\_handler](function.xml-set-start-namespace-decl-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_start\_namespace\_decl\_handler](function.xml-set-start-namespace-decl-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [xml\_set\_unparsed\_entity\_decl\_handler](function.xml-set-unparsed-entity-decl-handler.md) | Passar uma string não-callable no parâmetro handler foi descontinuado, use um chamável apropriado para métodos, ou null para redefinir o manipulador. |
|  | [xml\_set\_unparsed\_entity\_decl\_handler](function.xml-set-unparsed-entity-decl-handler.md) | A validade do manipulador handler como um tipo callable agora é verificada ao configurar o manipulador ao invés de verificar na chamada. |
|  | [IntlCalendar::set](intlcalendar.set.md) | Este método foi descontinuado em favor dos métodos IntlCalendar::setDate e IntlCalendar::setDateTime. |
|  | [IntlDateFormatter::create](intldateformatter.create.md) | Uma exceção ValueError agora é lançada se locale for inválido. |
|  | [IntlGregorianCalendar::\_\_construct](intlgregoriancalendar.construct.md) | Este método foi descontinuado em favor dos métodos IntlGregorianCalendar::createFromDate e IntlGregorianCalendar::createFromDateTime. |
|  | [mysqli::kill](mysqli.kill.md) | O método mysqli::kill e a função mysqli\_kill foram descontinuados. No lugar deles, deve ser usado o comando SQL KILL. |
|  | [mysqli::ping](mysqli.ping.md) | O método mysqli::ping e a função mysqli\_ping foram descontinuados. A partir do PHP 8.2.0, o recurso de reconnect (reconexão) não está mais disponível, tornando esta função obsoleta. |
|  | [mysqli::refresh](mysqli.refresh.md) | O método mysqli::refresh e a função mysqli\_refresh foram descontinuados. No lugar deles, use o comando SQL FLUSH. |
|  | [mysqli::store\_result](mysqli.store-result.md) | Passar o parâmetro mode foi descontinuado. O parâmetro já não tem efeito a partir do PHP 8.1.0. |
|  | [NumberFormatter::create](numberformatter.create.md) | Uma exceção ValueError agora é lançada se locale for inválido. |
|  | [PDO::getAttribute](pdo.getattribute.md) | Agora é possível obter o valor do atributo PDO::ATTR\_STRINGIFY\_FETCHES. |
|  | [PDOStatement::setFetchMode](pdostatement.setfetchmode.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [Phar::setAlias](phar.setalias.md) | Phar::setAlias agora tem um retorno provisório de true. |
|  | [Phar::setDefaultStub](phar.setdefaultstub.md) | Phar::setDefaultStub agora tem um retorno provisório de true. |
|  | [Phar::setStub](phar.setstub.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [PharData::setStub](phardata.setstub.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [PDO\_ODBC DSN](ref.pdo-odbc.connection.md) | Ao passar uma string vazia para o argumento de senha no construtor PDO, pwd não era incluído na string de conexão criada até agora, mas o comportamento foi alterado para incluí-lo como uma string vazia. Passando null para o argumento de senha no construtor PDO resulta no mesmo comportamento de antes. |
|  | [PDO\_ODBC DSN](ref.pdo-odbc.connection.md) | Alterado o comportamento para ignorar o argumento do nome de usuário e o argumento da senha no construtor PDO separadamente quando o DSN contém uid ou pwd. Anteriormente, se incluído apenas uid ou pwd no DSN, tanto o argumento do nome de usuário quanto o argumento da senha no construtor PDO eram ignorados. |
|  | [ReflectionClassConstant::\_\_toString](reflectionclassconstant.tostring.md) | O comentário do documento anexado agora foi incluído. |
|  | [ReflectionGenerator::getFunction](reflectiongenerator.getfunction.md) | ReflectionGenerator::getFunction agora pode ser chamada depois que o gerador terminar a execução. |
|  | [ReflectionProperty::\_\_toString](reflectionproperty.tostring.md) | O comentário do documento anexado agora é incluído. |
|  | [ResourceBundle::get](resourcebundle.get.md) | Uma exceção TypeError é lançada se o tipo do índice for inválido. Uma exceção ValueError é lançada se index for uma string e estiver vazia ou se for um int e não couber em um tipo inteiro de 32 bits. |
|  | [SoapServer::addFunction](soapserver.addfunction.md) | Passar um int para SoapServer::addFunction, incluindo SOAP\_FUNCTIONS\_ALL, foi descontinuado. |
|  | [SoapServer::setPersistence](soapserver.setpersistence.md) | SOAP\_PERSISTENCE\_SESSION agora funciona quando a extensão de sessões é compilada como um módulo compartilhado; anteriormente ela falhava silenciosamente. SoapServer::setPersistence agora também lança um Error quando SOAP\_PERSISTENCE\_SESSION é solicitada quando a extensão de sessões não está disponível. |
|  | [SoapVar::\_\_construct](soapvar.construct.md) | Uma instância de DateTimeInterface usada como o valor para um elemento xsd:dateTime, ou um tipo similar de data e horário, agora é serializada para sua representação ISO 8601, em vez de ser serializada como uma string vazia. |
|  | [SplFileObject::fgetcsv](splfileobject.fgetcsv.md) | Depender do valor padrão de escape agora está descontinuado. |
|  | [SplFileObject::fputcsv](splfileobject.fputcsv.md) | Depender do valor padrão de escape agora está descontinuado. |
|  | [SplFileObject::setCsvControl](splfileobject.setcsvcontrol.md) | Depender do valor padrão de escape agora está descontinuado. |
|  | [SplFixedArray::setSize](splfixedarray.setsize.md) | SplFixedArray::setSize agora tem um tipo de retorno provisório de true. |
|  | [SplFixedArray::\_\_wakeup](splfixedarray.wakeup.md) | Este método foi descontinuado, use SplFixedArray::\_\_unserialize em seu lugar. |
|  | [SplHeap::insert](splheap.insert.md) | SplHeap::insert agora tem um tipo de retorno provisório de true. |
|  | [SplHeap::recoverFromCorruption](splheap.recoverfromcorruption.md) | SplHeap::recoverFromCorruption agora tem um tipo de retorno provisório de true. |
|  | [SplPriorityQueue::insert](splpriorityqueue.insert.md) | SplPriorityQueue::insert agora tem um tipo de retorno provisório de true. |
|  | [SplPriorityQueue::recoverFromCorruption](splpriorityqueue.recoverfromcorruption.md) | SplPriorityQueue::recoverFromCorruption agora tem um tipo de retorno provisório de true. |
|  | [tidy::\_\_construct](tidy.construct.md) | Falhas na execução do construtor agora lançam uma exceção, em vez de cleanRepair silenciosamente um objeto inutilizável. |
|  | [XMLReader::open](xmlreader.open.md) | Passar um encoding inválido lançará um ValueError. |
|  | [XMLReader::XML](xmlreader.xml.md) | Passar um encoding inválido lançará um ValueError. |
|  | [XMLWriter::startDocument](xmlwriter.startdocument.md) | Passar um encoding contendo bytes nulos agora lançará um ValueError. |
|  | [XSLTProcessor::importStylesheet](xsltprocessor.importstylesheet.md) | Adicionado suporte para Dom\Document. |
|  | [XSLTProcessor::importStylesheet](xsltprocessor.importstylesheet.md) | Agora lança uma exceção TypeError ao invés de uma exceção ValueError se stylesheet não for um objeto XML. |
|  | [XSLTProcessor::registerPHPFunctions](xsltprocessor.registerphpfunctions.md) | Nomes de retorno de chamada inválidos agora lançam uma exceção ValueError. Passar uma entrada que não pode ser chamada agora lança uma exceção TypeError. |
|  | [XSLTProcessor::registerPHPFunctions](xsltprocessor.registerphpfunctions.md) | Agora é possível usar callables para funções de retorno ao usar functions com entradas de array. |
|  | [XSLTProcessor::setParameter](xsltprocessor.setparameter.md) | Agora lança uma exceção ValueError se qualquer argumento contiver bytes nulos ao invés de truncar silenciosamente. |
|  | [XSLTProcessor::setParameter](xsltprocessor.setparameter.md) | Agora é possível definir um valor de parâmetro contendo tanto aspas simples quanto aspas duplas. Antes do PHP 8.4.0, isto resultava em um alerta. |
|  | [XSLTProcessor::transformToDoc](xsltprocessor.transformtodoc.md) | Agora lança uma exceção Error se a função de retorno não puder ser chamada, em vez de emitir um alerta. |
|  | [XSLTProcessor::transformToDoc](xsltprocessor.transformtodoc.md) | Adicionado suporte para Dom\Document. |
|  | [XSLTProcessor::transformToURI](xsltprocessor.transformtouri.md) | Agora lança uma exceção Error se a função de retorno não puder ser chamada, em vez de emitir um alerta. |
|  | [XSLTProcessor::transformToURI](xsltprocessor.transformtouri.md) | Adicionado suporte para Dom\Document. |
|  | [XSLTProcessor::transformToXml](xsltprocessor.transformtoxml.md) | Agora lança uma exceção Error se a função de retorno não puder ser chamada, em vez de emitir um alerta. |
|  | [XSLTProcessor::transformToXml](xsltprocessor.transformtoxml.md) | Adicionado suporte para Dom\Document. |
| 8.3.0 | [DateInterval::\_\_construct](dateinterval.construct.md) | Agora lança DateMalformedIntervalStringException em vez de Exception. |
|  | [DateInterval::createFromDateString](dateinterval.createfromdatestring.md) | DateInterval::createFromDateString agora lança uma exceção DateMalformedIntervalStringException se uma string inválida for passada. Anteriormente, retornava false e um alerta era emitido. A função date\_interval\_create\_from\_date\_string não foi alterada. |
|  | [DatePeriod::\_\_construct](dateperiod.construct.md) | Agora dispara DateMalformedPeriodStringException em vez de Exception. |
|  | [DateTime::\_\_construct](datetime.construct.md) | Agora dispara DateMalformedStringException se uma string inválida é passada, em vez de Exception. |
|  | [DateTimeInterface::getTimestamp](datetime.gettimestamp.md) | A exceção fora do intervalo é agora DateRangeError. |
|  | [DateTime::modify](datetime.modify.md) | DateTime::modify agora lança uma exceção DateMalformedStringException se uma string inválida for passada. Anteriormente, retornava false e um alerta era emitido. A função date\_modify não foi alterada. |
|  | [DateTime::sub](datetime.sub.md) | Agora lança uma exceção DateInvalidOperationException com DateTime::sub, em vez de um alerta quando uma operação não suportada é realizada. A função date\_sub não foi alterada. |
|  | [DateTimeImmutable::\_\_construct](datetimeimmutable.construct.md) | Agora dispara DateMalformedStringException se uma string inválida for passada, em vez de Exception. |
|  | [DateTimeImmutable::modify](datetimeimmutable.modify.md) | DateTimeImmutable::modify agora lança uma exceção DateMalformedStringException se uma string inválida for passada. Anteriormente, retornava false e um alerta era emitido. |
|  | [DateTimeImmutable::sub](datetimeimmutable.sub.md) | Agora lança uma exceção DateInvalidOperationException em vez de um aviso quando uma operação não suportada for solicitada. |
|  | [DateTimeZone::\_\_construct](datetimezone.construct.md) | Valores inválidos agora retornam uma DateInvalidTimeZoneException em vez de uma Exception genérica. |
|  | [DOMCharacterData::after](domcharacterdata.after.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMCharacterData::after](domcharacterdata.after.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMCharacterData::appendData](domcharacterdata.appenddata.md) | Esta função agora tem um tipo de retorno true tentativo. |
|  | [DOMCharacterData::before](domcharacterdata.before.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMCharacterData::replaceWith](domcharacterdata.replacewith.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMChildNode::after](domchildnode.after.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMChildNode::after](domchildnode.after.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMChildNode::before](domchildnode.before.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMChildNode::replaceWith](domchildnode.replacewith.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMDocument::append](domdocument.append.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMDocument::createAttributeNS](domdocument.createattributens.md) | Chamar este método sem especificar um prefixo agora escolherá um prefixo em vez de assumir o namespace padrão. Anteriormente, isso criaria um atributo sem prefixo e aplicaria incorretamente o namespace ao elemento pai porque os namespaces padrão não se aplicam a atributos. |
|  | [DOMDocument::createAttributeNS](domdocument.createattributens.md) | Chamar este método usando um prefixo que já foi declarado no elemento pai com um URI de namespace diferente agora mudará o novo prefixo para evitar criar conflitos de namespace. Isso alinha o comportamento com a especificação DOM. Anteriormente, isso lançava uma DOMException com o código DOM\_NAMESPACE\_ERR. |
|  | [DOMDocument::load](domdocument.load.md) | Esta função agora tem um tipo de retorno bool tentativo. |
|  | [DOMDocument::loadHTML](domdocument.loadhtml.md) | Esta função agora tem um tipo de retorno bool tentativo. |
|  | [DOMDocument::loadHTMLFile](domdocument.loadhtmlfile.md) | Esta função agora tem um tipo de retorno bool tentativo. |
|  | [DOMDocument::loadXML](domdocument.loadxml.md) | Esta função agora tem um tipo de retorno bool tentativo. |
|  | [DOMDocument::prepend](domdocument.prepend.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMDocument::replaceChildren](domdocument.replacechildren.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMDocument::saveXML](domdocument.savexml.md) | LIBXML\_NOXMLDECL agora é suportada. |
|  | [DOMDocumentFragment::append](domdocumentfragment.append.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMDocumentFragment::prepend](domdocumentfragment.prepend.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMDocumentFragment::replaceChildren](domdocumentfragment.replacechildren.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMElement::after](domelement.after.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMElement::after](domelement.after.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMElement::append](domelement.append.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMElement::before](domelement.before.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMElement::prepend](domelement.prepend.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMElement::replaceChildren](domelement.replacechildren.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMElement::replaceWith](domelement.replacewith.md) | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMParentNode::append](domparentnode.append.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMParentNode::prepend](domparentnode.prepend.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [DOMParentNode::replaceChildren](domparentnode.replacechildren.md) | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção DOMException com código DOM\_HIERARCHY\_REQUEST\_ERR. |
|  | [FFI::cast](ffi.cast.md) | Chamar FFI::cast estaticamente agora foi descontinuado. |
|  | [FFI::cdef](ffi.cdef.md) | Funções C que retornam void irão retornar um tipo null do PHP ao invés de FFI\CType::TYPE\_VOID. |
|  | [FFI::load](ffi.load.md) | FFI::load agora é permitido em scripts de pré-carregamento quando o usuário de sistema atual é o mesmo que foi definido na diretiva de configuração opcache.preload\_user. |
|  | [FFI::new](ffi.new.md) | Chamar FFI::new estaticamente agora foi descontinuado. |
|  | [FFI::type](ffi.type.md) | Chamar FFI::type estaticamente agora foi descontinuado. |
|  | [array\_pad](function.array-pad.md) | Antes do PHP 8.3.0, somente 1.048.576 elementos podiam ser adicionados de uma vez. Agora é limitado apenas pelo tamanho máximo de um array. |
|  | [array\_product](function.array-product.md) | Agora emite um E\_WARNING quando os valores do array não puderem ser convertidos para int ou float. Anteriormente, arrays e objects eram ignorados enquanto outros valores eram convertidos para int. Adicionalmente, objetos que definem uma conversão numérica (ex.: GMP) agora são convertidos ao invés de ignorados. |
|  | [array\_sum](function.array-sum.md) | Agora emite um E\_WARNING quando os valores do array não puderem ser convertidos para int ou float. Anteriormente, arrays e objects eram ignorados enquanto outros valores eram convertidos para int. Adicionalmente, objetos que definem uma conversão numérica (ex.: GMP) agora são convertidos ao invés de ignorados. |
|  | [assert](function.assert.md) | Todas as configurações INI assert. estão desencorajadas. |
|  | [assert\_options](function.assert-options.md) | assert\_options agora foi descontinuada. |
|  | [class\_alias](function.class-alias.md) | class\_alias agora suporta criação de apelido de uma classe interna. |
|  | [curl\_getinfo](function.curl-getinfo.md) | Introduzidas as constantes CURLINFO\_CAINFO e CURLINFO\_CAPATH. |
|  | [dba\_fetch](function.dba-fetch.md) | Chamar dba\_fetch com dba no 3º argumento agora foi descontinuado. |
|  | [easter\_date](function.easter-date.md) | Em sistemas de 64 bits, o parâmetro year agora aceita valores na faixa de 1970 a 2.000.000.000. |
|  | [fgetcsv](function.fgetcsv.md) | Uma string vazia é retornada ao invés de uma string com um único byte nulo para o último campo, se ele contiver apenas um demarcador não terminado. |
|  | [file](function.file.md) | Uma exceção ValueError é lançada para qualquer valor inválido no parâmetro flags. |
|  | [gc\_status](function.gc-status.md) | gc\_status agora retorna os seguintes campos adicionais: "running", "protected", "full", "buffer\_size", "application\_time", "collector\_time", "destructor\_time" e "free\_time". |
|  | [get\_class](function.get-class.md) | Chamar get\_class sem um argumento agora emite um alerta E\_DEPRECATED; anteriormente, chamar esta função de dentro de uma classe retornava o nome dessa classe. |
|  | [get\_parent\_class](function.get-parent-class.md) | Chamar get\_parent\_class sem um argumento agora emite um alerta E\_DEPRECATED; anteriormente, chamar esta função de dentro de uma classe retornava o nome dessa classe. |
|  | [highlight\_file](function.highlight-file.md) | O HTML resultante foi alterado. |
|  | [highlight\_string](function.highlight-string.md) | O HTML resultante foi alterado. |
|  | [imagerotate](function.imagerotate.md) | O parâmetro não utilizado ignore\_transparent foi completamente removido. |
|  | [ldap\_connect](function.ldap-connect.md) | Chamar ldap\_connect com hostname e port separados agora foi descontinuado. |
|  | [mb\_convert\_case](function.mb-convert-case.md) | Implementadas regras condicionais de maiúsculas/minúsculas para a letra grega sigma que só se aplicam aos modos MB\_CASE\_LOWER e MB\_CASE\_TITLE, e não a MB\_CASE\_LOWER\_SIMPLE e MB\_CASE\_TITLE\_SIMPLE. |
|  | [mb\_decode\_mimeheader](function.mb-decode-mimeheader.md) | Caracteres de sublinhado (\_) são convertidos para espaços conforme especificado na RFC 2047. |
|  | [mb\_encode\_mimeheader](function.mb-encode-mimeheader.md) | Bytes NUL (0) não são mais excluídos quando codificados através da codificação Quoted-Printable, mas são codificados como =00. |
|  | [mb\_strimwidth](function.mb-strimwidth.md) | Passar uma largura negativa width para mb\_strimwidth agora foi descontinuado. |
|  | [mb\_strtolower](function.mb-strtolower.md) | Implementadas regras condicionais de maiúscula/minúscula para a letra grega sigma. |
|  | [mt\_srand](function.mt-srand.md) | seed agora é anulável. |
|  | [number\_format](function.number-format.md) | Adicionada a manipulação de valores negativos para decimals. |
|  | [odbc\_autocommit](function.odbc-autocommit.md) | enable agora pode ser nulo. |
|  | [openssl\_pkey\_new](function.openssl-pkey-new.md) | Adicionado suporte para geração de chaves EC com parâmetros EC customizados. Especificamente, com a introdução das opções EC: p, a, b, seed, generator, g\_x, g\_y, cofactor e order. |
|  | [password\_hash](function.password-hash.md) | password\_hash agora define a exceção Random\RandomException subjacente como a Exception::$previous quando uma exceção ValueError é lançada devido a uma falha na geração do salt. |
|  | [pg\_convert](function.pg-convert.md) | Agora lança um erro ValueError ou TypeError quando o valor ou tipo de campo não corresponde corretamente ao tipo do PostgreSQL; anteriormente um E\_WARNING era emitido. |
|  | [pg\_fetch\_object](function.pg-fetch-object.md) | Agora lança uma exceção ValueError quando constructor\_args for não vazio e a classe não possuir construtor; anteriormente uma Exception era lançada. |
|  | [pg\_fetch\_result](function.pg-fetch-result.md) | row agora é anulável. |
|  | [pg\_field\_is\_null](function.pg-field-is-null.md) | row agora é anulável. |
|  | [pg\_field\_prtlen](function.pg-field-prtlen.md) | row agora é anulável. |
|  | [pg\_insert](function.pg-insert.md) | Agora lança um erro ValueError quando a tabela especificada é inválida; anteriormente um E\_WARNING era emitido. |
|  | [pg\_insert](function.pg-insert.md) | Agora lança um erro ValueError ou TypeError quando o valor ou tipo de campo não corresponde corretamente ao tipo do PostgreSQL; anteriormente um E\_WARNING era emitido. |
|  | [pg\_trace](function.pg-trace.md) | trace\_mode foi adicionado. |
|  | [posix\_eaccess](function.posix-eaccess.md) | Verifica as permissões efetivas de usuário/grupo a um arquivo, diferentemente de posix\_access que verifica as permissões reais de usuário/grupo. |
|  | [posix\_getrlimit](function.posix-getrlimit.md) | O parâmetro opcional resource foi adicionado. |
|  | [posix\_isatty](function.posix-isatty.md) | Erros de tipo E\_WARNING agora são gerados para conversões forçadas de inteiros seguindo a semântica usual de coerção de tipo do PHP. |
|  | [posix\_ttyname](function.posix-ttyname.md) | Erros do tipo E\_WARNING agora são gerados para conversões forçadas de inteiros seguindo a semântica usual de coerção de tipo PHP. |
|  | [posix\_ttyname](function.posix-ttyname.md) | Caso o valor de file\_descriptor seja um inteiro inválido, um E\_WARNING é gerado. |
|  | [proc\_close](function.proc-close.md) | proc\_close agora retorna o código de saída correto mesmo depois que proc\_get\_status tenha sido chamada previamente. Anteriormente, -1 era retornado nesse caso. |
|  | [proc\_get\_status](function.proc-get-status.md) | A entrada "cached" foi adicionada ao array retornado. Antes do PHP 8.3.0, apenas a primeira chamada retornava o código de saída real. A entrada "cached" indica que o código de saída foi armazenado em cache. |
|  | [proc\_open](function.proc-open.md) | Uma exceção ValueError será lançada se command for um array sem pelo menos um elemento não vazio. |
|  | [range](function.range.md) | Se ambos start e end forem strings então range nem sempre produzirá um array de bytes. Anteriormente, se um dos valores limite for uma string numérica, então o outro valor string é implicitamente convertido para um int. |
|  | [range](function.range.md) | Um aviso E\_WARNING agora é emitido se start ou end é uma string implicitamente conversível para int se quaisquer valores limite é interpretado como um número. |
|  | [range](function.range.md) | Um aviso E\_WARNING agora é emitido se start ou end é uma string não numérica com mais de um byte. |
|  | [range](function.range.md) | Um aviso E\_WARNING agora é emitido se start ou end é uma string vazia. |
|  | [range](function.range.md) | Se step é um float sem parte fracionária, ele será interpretado como um int. |
|  | [range](function.range.md) | Um erro ValueError agora é lançado se step é negativo quando da produção de um array crescente. |
|  | [range](function.range.md) | Um erro ValueError agora é lançado se step não for finito. |
|  | [range](function.range.md) | Um erro TypeError agora é lançado se start ou end é um array, object ou resource. Anteriormente eles eram implicitamente convertidos para int. |
|  | [srand](function.srand.md) | seed agora é anulável. |
|  | [str\_getcsv](function.str-getcsv.md) | Uma string vazia é retornada ao invés de uma string com um único byte nulo para o último campo, se ele contiver apenas um demarcador não terminado. |
|  | [stream\_notification\_callback](function.stream-notification-callback.md) | Suporte para STREAM\_NOTIFY\_COMPLETED foi implementado, versões mais antigas do PHP nunca ativariam esta notificação. |
|  | [strrchr](function.strrchr.md) | O parâmetro before\_needle foi adicionado. |
|  | [strtok](function.strtok.md) | Agora emite um alerta E\_WARNING quando token não for informado. |
|  | [unserialize](function.unserialize.md) | Agora emite um E\_WARNING quando a string de entrada tem dados não consumidos. |
|  | [unserialize](function.unserialize.md) | Agora emite um E\_WARNING quando a string informada não for desserializável; anteriormente um E\_NOTICE era emitido. |
|  | [xml\_parser\_get\_option](function.xml-parser-get-option.md) | A função agora retorna um booleano para opções booleanas. |
|  | [xml\_parser\_set\_option](function.xml-parser-set-option.md) | O parâmetro value agora aceita booleanos. As opções XML\_OPTION\_CASE\_FOLDING e XML\_OPTION\_SKIP\_WHITE são agora opções booleanas. |
|  | [IntlBreakIterator::setText](intlbreakiterator.settext.md) | Este método agora retorna false em caso de falha; anteriormente retornava null. |
|  | [IntlChar::enumCharNames](intlchar.enumcharnames.md) | Este método agora retorna false em caso de falha; anteriormente retornava null. |
|  | [IntlDateFormatter::setTimeZone](intldateformatter.settimezone.md) | Esta função agora retorna true em caso de sucesso; anteriormente, retornava null. |
|  | [mysqli\_result::fetch\_object](mysqli-result.fetch-object.md) | Agora lança uma exceção ValueError quando o parâmetro constructor\_args é não vazio com a classe não possuindo um construtor; anteriormente uma Exception era lançada. |
|  | [mysqli::poll](mysqli.poll.md) | Agora lança uma exceção ValueError quando nem o parâmetro read nem o parâmetro error são passados. |
|  | [Phar::setStub](phar.setstub.md) | Chamar Phar::setStub com um resource e um length agora está descontinuado. Tais chamadas devem ser substituídas por: $phar->setStub(stream\_get\_contents($resource)); |
|  | [ReflectionClass::getStaticProperties](reflectionclass.getstaticproperties.md) | O tipo de retorno de ReflectionClass::getStaticProperties foi alterado para array de ?array. |
|  | [ReflectionProperty::setValue](reflectionproperty.setvalue.md) | Chamar este método com um único argumento está descontinuado, use ReflectionProperty::setValue(null, $value) para propriedades estáticas. |
|  | [SQLite3::enableExceptions](sqlite3.enableexceptions.md) | Chamar SQLite3::enableExceptions com enable como false irá disparar um aviso E\_DEPRECATED. |
|  | [ZipArchive::addFile](ziparchive.addfile.md) | ZipArchive::FL\_OPEN\_FILE\_NOW foi adicionado. |
|  | [ZipArchive::addFile](ziparchive.addfile.md) | ZipArchive::LENGTH\_TO\_END e ZipArchive::LENGTH\_UNCHECKED foram adicionadas. |
|  | [ZipArchive::addGlob](ziparchive.addglob.md) | ZipArchive::FL\_OPEN\_FILE\_NOW foi adicionado. |
|  | [ZipArchive::replaceFile](ziparchive.replacefile.md) | ZipArchive::FL\_OPEN\_FILE\_NOW foi adicionado. |
|  | [ZipArchive::replaceFile](ziparchive.replacefile.md) | ZipArchive::LENGTH\_TO\_END e ZipArchive::LENGTH\_UNCHECKED foram adicionados. |
| 8.2.9 | [DateTimeImmutable::createFromFormat](datetimeimmutable.createfromformat.md) | O especificador (space) agora também suporta caracteres NBSP (U+A0) e NNBSP (U+202F). |
| 8.2.1 | [SplFileObject::\_\_toString](splfileobject.tostring.md) | Alterado de um alias de SplFileObject::fgets para uma implementação de SplFileObject::current que retorna uma string CSV quando a opção SplFileObject::READ\_CSV está definida. |
| 8.2.0 | [ArrayIterator::asort](arrayiterator.asort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayIterator::ksort](arrayiterator.ksort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayIterator::natcasesort](arrayiterator.natcasesort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayIterator::natsort](arrayiterator.natsort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayIterator::uasort](arrayiterator.uasort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayIterator::uksort](arrayiterator.uksort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayObject::asort](arrayobject.asort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayObject::ksort](arrayobject.ksort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayObject::natcasesort](arrayobject.natcasesort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayObject::natsort](arrayobject.natsort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayObject::uasort](arrayobject.uasort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ArrayObject::uksort](arrayobject.uksort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [DateInterval::\_\_construct](dateinterval.construct.md) | Apenas as propriedades y a f, invert e days estarão visíveis, incluindo uma nova propriedade booleana from\_string. |
|  | [DateInterval::createFromDateString](dateinterval.createfromdatestring.md) | Apenas as propriedades from\_string e date\_string estarão visíveis quando um DateInterval for criado com este método. |
|  | [DatePeriod::\_\_construct](dateperiod.construct.md) | A constante DatePeriod::INCLUDE\_END\_DATE foi incluída. |
|  | [DateTime::createFromFormat](datetime.createfromformat.md) | Agora dispara ValueError quando bytes nulos são passados pelo parâmetro datetime, o que antes era silencioamente ignorado. |
|  | [DateTimeInterface::format](datetime.format.md) | Os caracteres de formatação X e x foram adicionados. |
|  | [DateTimeImmutable::createFromFormat](datetimeimmutable.createfromformat.md) | Os especificadores X e x de format foram adicionados. |
|  | [DateTimeImmutable::createFromFormat](datetimeimmutable.createfromformat.md) | Agora lança a exceção ValueError quando bytes nulos são passados no parâmetro datetime, o que antes era silenciosamente ignorado. |
|  | [DateTimeImmutable::getLastErrors](datetimeimmutable.getlasterrors.md) | Antes do PHP 8.2.0, esta função não retornava false quando não havia warnings ou erros. Em vez disso, ela sempre retornaria a estrutura de array documentada. |
|  | [FilesystemIterator::\_\_construct](filesystemiterator.construct.md) | Antes do PHP 8.2.0, FilesystemIterator::SKIP\_DOTS era sempre definido e não podia ser removido. |
|  | [array\_walk](function.array-walk.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [array\_walk\_recursive](function.array-walk-recursive.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [arsort](function.arsort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [asort](function.asort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [curl\_getinfo](function.curl-getinfo.md) | Introduzidas as constantes CURLINFO\_PROXY\_ERROR, CURLINFO\_REFERER e CURLINFO\_RETRY\_AFTER. |
|  | [curl\_multi\_setopt](function.curl-multi-setopt.md) | Introduzida a constante CURLMOPT\_MAX\_CONCURRENT\_STREAMS. |
|  | [date\_parse\_from\_format](function.date-parse-from-format.md) | Agora lança ValueError quando bytes nulos são passados por datetime, o que antes era silenciosamente ignorado. |
|  | [dba\_fetch](function.dba-fetch.md) | O argumento opcional "skip" de dba\_fetch fica agora no final, alinhado com a semântica das funções de usuário do PHP. A assinatura anterior com sobrecarga ainda é aceita porém desencorajada. |
|  | [dba\_open](function.dba-open.md) | flags foi adicionado. |
|  | [dba\_open](function.dba-open.md) | handler agora pode ser nulo. |
|  | [dba\_popen](function.dba-popen.md) | flags foi adicionado. |
|  | [getimagesize](function.getimagesize.md) | Agora, a função retorna as dimensões reais da imagem, bits e canais de imagens AVIF; anteriormente, as dimensões eram relatadas como 0x0, e bits e channels não eram relatados de forma alguma. |
|  | [idate](function.idate.md) | Inclui os caracteres de formato N (dia da semana ISO-8601) e o (ano ISO-8601). |
|  | [iterator\_count](function.iterator-count.md) | O tipo de iterator foi ampliado de Traversable para Traversablearray. |
|  | [iterator\_to\_array](function.iterator-to-array.md) | O tipo de iterator foi ampliado de Traversable para Traversablearray. |
|  | [krsort](function.krsort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [krsort](function.krsort.md) | Esta função agora faz comparação numérica de string com a constante SORT\_REGULAR usando as regras padrão do PHP 8. |
|  | [ksort](function.ksort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ksort](function.ksort.md) | Esta função agora faz comparação numérica de string com a constante SORT\_REGULAR usando as regras padrão do PHP 8. |
|  | [lcfirst](function.lcfirst.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [mb\_convert\_encoding](function.mb-convert-encoding.md) | mb\_convert\_encoding não retornará mais as seguintes codificações não textuais: "Base64", "QPrint", "UUencode", "HTML entities", "7 bit" e "8 bit". |
|  | [mb\_convert\_kana](function.mb-convert-kana.md) | Um ValueError agora é gerado se a combinação de diferentes modes for inválida. |
|  | [mb\_detect\_encoding](function.mb-detect-encoding.md) | mb\_detect\_encoding não retornará mais as seguintes codificações não textuais: "Base64", "QPrint", "UUencode", "HTML entities", "7 bit" e "8 bit". |
|  | [natcasesort](function.natcasesort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [natsort](function.natsort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [openlog](function.openlog.md) | A função agora sempre retorna true. Anteriormente, retornava false em caso de falha. |
|  | [pg\_close](function.pg-close.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [pg\_untrace](function.pg-untrace.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [random\_bytes](function.random-bytes.md) | No caso de uma falha de CSPRNG, esta função agora lançará uma Random\RandomException. Anteriormente, uma Exception simples era lançada. |
|  | [random\_int](function.random-int.md) | No caso de uma falha de CSPRNG, esta função agora lançará um Random\RandomException. Anteriormente um raso Exception era lançado. |
|  | [rsort](function.rsort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [setcookie](function.setcookie.md) | O formato de data do cookie agora é 'D, d M Y H:i:s \G\M\T'; anteriormente era 'D, d-M-Y H:i:s T'. |
|  | [snmp\_set\_enum\_print](function.snmp-set-enum-print.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [snmp\_set\_oid\_output\_format](function.snmp-set-oid-output-format.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [snmp\_set\_quick\_print](function.snmp-set-quick-print.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [snmp\_set\_valueretrieval](function.snmp-set-valueretrieval.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [sort](function.sort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [str\_ireplace](function.str-ireplace.md) | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com setlocale. Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
|  | [str\_split](function.str-split.md) | Se string estiver vazio, um array agora é retornado. Anteriormente, um array contendo uma única string vazia foi retornada. |
|  | [strcasecmp](function.strcasecmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strcmp](function.strcmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [stripos](function.stripos.md) | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com setlocale. Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
|  | [stristr](function.stristr.md) | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com setlocale. Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
|  | [strnatcasecmp](function.strnatcasecmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strnatcmp](function.strnatcmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strncasecmp](function.strncasecmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strncmp](function.strncmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strripos](function.strripos.md) | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com setlocale. Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
|  | [strtolower](function.strtolower.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [strtoupper](function.strtoupper.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [substr\_compare](function.substr-compare.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [uasort](function.uasort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ucfirst](function.ucfirst.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [ucwords](function.ucwords.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [uksort](function.uksort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [usort](function.usort.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [utf8\_decode](function.utf8-decode.md) | Esta função foi descontinuada. |
|  | [utf8\_encode](function.utf8-encode.md) | Esta função foi descontinuada. |
|  | [var\_export](function.var-export.md) | Nomes de classe exportados agora são completamente qualificadas; anteriormente, a barra invertida no início era omitida. |
|  | [IntlCalendar::clear](intlcalendar.clear.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [IntlCalendar::set](intlcalendar.set.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [IntlCalendar::setFirstDayOfWeek](intlcalendar.setfirstdayofweek.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [IntlCalendar::setLenient](intlcalendar.setlenient.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [IntlCalendar::setRepeatedWallTimeOption](intlcalendar.setrepeatedwalltimeoption.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [IntlCalendar::setSkippedWallTimeOption](intlcalendar.setskippedwalltimeoption.md) | O tipo do retorno agora é true; anteriormente, era bool. |
|  | [ReflectionEnum::getBackingType](reflectionenum.getbackingtype.md) | O tipo de retorno agora é declarado como ?ReflectionNamedType. Anteriormente, ?ReflectionType era declarado. |
| 8.1.14 | [SplFileObject::\_\_toString](splfileobject.tostring.md) | Alterado de um alias de SplFileObject::fgets para uma implementação de SplFileObject::current que retorna uma string CSV quando a opção SplFileObject::READ\_CSV está definida. |
| 8.1.8 | [DateTime::createFromFormat](datetime.createfromformat.md) | Agora dispara ValueError quando bytes nulos são passados pelo parâmetro datetime, o que antes era silencioamente ignorado. |
|  | [DateTimeImmutable::createFromFormat](datetimeimmutable.createfromformat.md) | Agora lança a exceção ValueError quando bytes nulos são passados no parâmetro datetime, o que antes era silenciosamente ignorado. |
|  | [date\_parse\_from\_format](function.date-parse-from-format.md) | Agora lança ValueError quando bytes nulos são passados por datetime, o que antes era silenciosamente ignorado. |
| 8.1.0 | [DateTime::setTime](datetime.settime.md) | O comportamento com duplicidade de horários existentes (durante um retorno de horário de verão) mudou. Anteriormente, o PHP pegaria a segunda ocorrência (depois do retorno do horário de verão), em vez da primeira ocorrência (antes do retorno do horário de verão). |
|  | [DateTimeImmutable::setTime](datetimeimmutable.settime.md) | O comportamento com horários que podem ter duplicidade (durante o retorno do horário de verão) mudou. Anteriormente, o PHP usaria a segunda ocorrência do horário (depois do retorno do horário de verão), em vez da primeira ocorrência (antes do retorno). |
|  | [DateTimeZone::getTransitions](datetimezone.gettransitions.md) | O valor padrão de timestampEnd foi alterado para 2147483647. Anteriormente era PHP\_INT\_MAX. |
|  | [DirectoryIterator::key](directoryiterator.key.md) | Quando o iterador não está inicializado, agora é lançado um Error. Anteriormente, o método retornava false. |
|  | [DOMDocument::createComment](domdocument.createcomment.md) | Em caso de erro, agora é lançada uma DomException. Anteriormente, false era retornado. |
|  | [DOMDocument::createDocumentFragment](domdocument.createdocumentfragment.md) | Em caso de erro, agora é lançada uma DomException. Anteriormente, false era retornado. |
|  | [DOMDocument::createTextNode](domdocument.createtextnode.md) | Em caso de erro, agora é lançada uma DomException. Anteriormente, retornava false. |
|  | [current](function.current.md) | Chamar esta função em objects foi descontinuado. Converta o object para um array usando get\_mangled\_object\_vars primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa Iterator, como ArrayIterator. |
|  | [date\_sunrise](function.date-sunrise.md) | Esta função foi descontinuada em favor de date\_sun\_info. |
|  | [date\_sunset](function.date-sunset.md) | Esta função foi descontinuada em favor de date\_sun\_info. |
|  | [dba\_popen](function.dba-popen.md) | handler agora pode ser nulo. |
|  | [define](function.define.md) | value agora pode ser um objeto. |
|  | [end](function.end.md) | Chamar esta função em objects foi descontinuado. Converta o object para um array usando get\_mangled\_object\_vars primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa Iterator, como ArrayIterator. |
|  | [exif\_imagetype](function.exif-imagetype.md) | Adicionado suporte a AVIF. |
|  | [finfo\_buffer](function.finfo-buffer.md) | O parâmetro finfo agora espera uma instância de finfo; anteriormente, um resource era esperado. |
|  | [finfo\_close](function.finfo-close.md) | Esta função agora é um NOP. |
|  | [finfo\_close](function.finfo-close.md) | O parâmetro finfo agora espera uma instância de finfo; anteriormente, um resource era esperado. |
|  | [finfo\_file](function.finfo-file.md) | O parâmetro finfo agora espera uma instância de finfo; anteriormente, um resource era esperado. |
|  | [finfo\_open](function.finfo-open.md) | Agora retorna uma instância de finfo; anteriormente, um resource era retornado. |
|  | [finfo\_set\_flags](function.finfo-set-flags.md) | O parâmetro finfo agora espera uma instância de finfo; anteriormente, um resource era esperado. |
|  | [fputcsv](function.fputcsv.md) | O parâmetro opcional eol foi adicionado. |
|  | [ftp\_alloc](function.ftp-alloc.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_append](function.ftp-append.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_cdup](function.ftp-cdup.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_chdir](function.ftp-chdir.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_chmod](function.ftp-chmod.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_close](function.ftp-close.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_connect](function.ftp-connect.md) | Retorna uma instância FTP\Connection agora; anteriormente, um resource era retornado. |
|  | [ftp\_delete](function.ftp-delete.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_exec](function.ftp-exec.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_fget](function.ftp-fget.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_fput](function.ftp-fput.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_get](function.ftp-get.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_get\_option](function.ftp-get-option.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_login](function.ftp-login.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_mdtm](function.ftp-mdtm.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_mkdir](function.ftp-mkdir.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_mlsd](function.ftp-mlsd.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_nb\_continue](function.ftp-nb-continue.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_nb\_fget](function.ftp-nb-fget.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_nb\_fput](function.ftp-nb-fput.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_nb\_get](function.ftp-nb-get.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_nb\_put](function.ftp-nb-put.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_nlist](function.ftp-nlist.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_pasv](function.ftp-pasv.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_put](function.ftp-put.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_pwd](function.ftp-pwd.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_raw](function.ftp-raw.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_rawlist](function.ftp-rawlist.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_rename](function.ftp-rename.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_rmdir](function.ftp-rmdir.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_set\_option](function.ftp-set-option.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_site](function.ftp-site.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_size](function.ftp-size.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [ftp\_ssl\_connect](function.ftp-ssl-connect.md) | Retorna uma instância de FTP\Connection agora; anteriormente, um resource era retornado. |
|  | [ftp\_systype](function.ftp-systype.md) | O parâmetro ftp agora espera uma instância de FTP\Connection; anteriormente, um resource era esperado. |
|  | [get\_html\_translation\_table](function.get-html-translation-table.md) | flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [gmp\_init](function.gmp-init.md) | Suporte a prefixos octais explícitos 0o e 0O foi adicionado para strings do parâmetro num. A interpretação de tais prefixos quando base é 0 também foi adicionada. |
|  | [hash](function.hash.md) | O parâmetro options foi adicionado. |
|  | [hash\_algos](function.hash-algos.md) | Foi adicionado suporte para algoritmos MurmurHash3 e xxHash. |
|  | [hash\_file](function.hash-file.md) | O parâmetro options foi adicionado. |
|  | [hash\_init](function.hash-init.md) | O parâmetro options foi adicionado. |
|  | [html\_entity\_decode](function.html-entity-decode.md) | O padrão de flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [htmlentities](function.htmlentities.md) | O padrão de flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [htmlspecialchars](function.htmlspecialchars.md) | O padrão para flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [htmlspecialchars\_decode](function.htmlspecialchars-decode.md) | O padrão de flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [imagechar](function.imagechar.md) | O parâmetro font agora aceita uma instância de GdFont ou um int; anteriormente, apenas int era aceito. |
|  | [imagecharup](function.imagecharup.md) | O parâmetro font agora aceita uma instância de GdFont ou um int; anteriormente, apenas int era aceito. |
|  | [imagefilledpolygon](function.imagefilledpolygon.md) | O parâmetro num\_points foi descontinuado. |
|  | [imagefontheight](function.imagefontheight.md) | O parâmetro font agora aceita uma instância de GdFont ou um int; anteriormente, apenas int era aceito. |
|  | [imagefontwidth](function.imagefontwidth.md) | O parâmetro font agora aceita uma instância de GdFont ou um int; anteriormente, apenas int era aceito. |
|  | [imageloadfont](function.imageloadfont.md) | Retorna uma instância GdFont agora; anteriormente, um int era retornado. |
|  | [imageopenpolygon](function.imageopenpolygon.md) | O parâmetro num\_points foi descontinuado. |
|  | [imagepolygon](function.imagepolygon.md) | O parâmetro num\_points foi descontinuado. |
|  | [imagestring](function.imagestring.md) | O parâmetro font agora aceita uma instância de GdFont ou um int; anteriormente, apenas int era aceito. |
|  | [imagestringup](function.imagestringup.md) | O parâmetro font agora aceita uma instância de GdFont ou um int; anteriormente, apenas int era aceito. |
|  | [imagetypes](function.imagetypes.md) | IMG\_AVIF adicionado. |
|  | [ini\_set](function.ini-set.md) | value agora aceita qualquer tipo escalar (incluindo null). Anteriormente, apenas valores string eram aceitos. |
|  | [key](function.key.md) | Chamar esta função em objects foi descontinuado. Converta o object para um array usando get\_mangled\_object\_vars primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa Iterator, como ArrayIterator. |
|  | [ldap\_add](function.ldap-add.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_add\_ext](function.ldap-add-ext.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_add\_ext](function.ldap-add-ext.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_bind](function.ldap-bind.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_bind\_ext](function.ldap-bind-ext.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_bind\_ext](function.ldap-bind-ext.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_compare](function.ldap-compare.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_connect](function.ldap-connect.md) | Retorna uma instância LDAP\Connection agora; anteriormente, um resource era retornado. |
|  | [ldap\_count\_entries](function.ldap-count-entries.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_count\_entries](function.ldap-count-entries.md) | O parâmetro result agora espera uma instância de LDAP\Result; anteriormente, um resource ldap result válido era esperado. |
|  | [ldap\_count\_references](function.ldap-count-references.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_count\_references](function.ldap-count-references.md) | O parâmetro result agora espera uma instância de LDAP\Result; anteriormente, um resource ldap result válido era esperado. |
|  | [ldap\_delete](function.ldap-delete.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_delete\_ext](function.ldap-delete-ext.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_delete\_ext](function.ldap-delete-ext.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_errno](function.ldap-errno.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_error](function.ldap-error.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_exop](function.ldap-exop.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_exop\_passwd](function.ldap-exop-passwd.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_exop\_refresh](function.ldap-exop-refresh.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_exop\_whoami](function.ldap-exop-whoami.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_first\_attribute](function.ldap-first-attribute.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_first\_attribute](function.ldap-first-attribute.md) | O parâmetro entry agora espera uma instância de LDAP\ResultEntry; anteriormente, um resource ldap result entry válido era esperado. |
|  | [ldap\_first\_entry](function.ldap-first-entry.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_first\_entry](function.ldap-first-entry.md) | O parâmetro result agora espera uma instância de LDAP\Result; anteriormente, um resource ldap result válido era esperado. |
|  | [ldap\_first\_entry](function.ldap-first-entry.md) | Agora retorna uma instância de LDAP\ResultEntry; anteriormente, um resource era retornado. |
|  | [ldap\_free\_result](function.ldap-free-result.md) | O parâmetro result agora espera uma instância de LDAP\Result; anteriormente, um resource ldap result válido era esperado. |
|  | [ldap\_get\_attributes](function.ldap-get-attributes.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_get\_attributes](function.ldap-get-attributes.md) | O parâmetro entry agora espera uma instância de LDAP\ResultEntry; anteriormente, um resource ldap result entry válido era esperado. |
|  | [ldap\_get\_dn](function.ldap-get-dn.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_get\_dn](function.ldap-get-dn.md) | O parâmetro entry agora espera uma instância de LDAP\ResultEntry; anteriormente, um resource ldap result entry válido era esperado. |
|  | [ldap\_get\_entries](function.ldap-get-entries.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_get\_entries](function.ldap-get-entries.md) | O parâmetro result agora espera uma instância de LDAP\Result; anteriormente, um resource ldap result válido era esperado. |
|  | [ldap\_get\_option](function.ldap-get-option.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_get\_values](function.ldap-get-values.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_get\_values](function.ldap-get-values.md) | O parâmetro entry agora espera uma instância de LDAP\ResultEntry; anteriormente, um resource ldap result entry válido era esperado. |
|  | [ldap\_get\_values\_len](function.ldap-get-values-len.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_get\_values\_len](function.ldap-get-values-len.md) | O parâmetro entry agora espera uma instância de LDAP\ResultEntry; anteriormente, um resource ldap result entry válido era esperado. |
|  | [ldap\_list](function.ldap-list.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_list](function.ldap-list.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_mod\_add](function.ldap-mod-add.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_mod\_del](function.ldap-mod-del.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_mod\_replace](function.ldap-mod-replace.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_modify\_batch](function.ldap-modify-batch.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_mod\_add\_ext](function.ldap-mod_add-ext.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_mod\_add\_ext](function.ldap-mod_add-ext.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_mod\_del\_ext](function.ldap-mod_del-ext.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_mod\_del\_ext](function.ldap-mod_del-ext.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_mod\_replace\_ext](function.ldap-mod_replace-ext.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_mod\_replace\_ext](function.ldap-mod_replace-ext.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_next\_attribute](function.ldap-next-attribute.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_next\_attribute](function.ldap-next-attribute.md) | O parâmetro entry agora espera uma instância de LDAP\ResultEntry; anteriormente, um resource ldap result entry válido era esperado. |
|  | [ldap\_next\_entry](function.ldap-next-entry.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_next\_entry](function.ldap-next-entry.md) | O parâmetro entry agora espera uma instância de LDAP\ResultEntry; anteriormente, um resource ldap result entry válido era esperado. |
|  | [ldap\_next\_entry](function.ldap-next-entry.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_parse\_exop](function.ldap-parse-exop.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_parse\_exop](function.ldap-parse-exop.md) | O parâmetro result agora espera uma instância de LDAP\Result; anteriormente, um resource ldap result válido era esperado. |
|  | [ldap\_parse\_result](function.ldap-parse-result.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_parse\_result](function.ldap-parse-result.md) | O parâmetro result agora espera uma instância de LDAP\Result; anteriormente, um resource ldap result válido era esperado. |
|  | [ldap\_read](function.ldap-read.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_read](function.ldap-read.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_rename](function.ldap-rename.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_rename\_ext](function.ldap-rename-ext.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_rename\_ext](function.ldap-rename-ext.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_sasl\_bind](function.ldap-sasl-bind.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_search](function.ldap-search.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_search](function.ldap-search.md) | Agora retorna uma instância de LDAP\Result; anteriormente, um resource era retornado. |
|  | [ldap\_set\_option](function.ldap-set-option.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_set\_rebind\_proc](function.ldap-set-rebind-proc.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [ldap\_unbind](function.ldap-unbind.md) | O parâmetro ldap agora espera uma instância de LDAP\Connection; anteriormente, um resource ldap link válido era esperado. |
|  | [mb\_check\_encoding](function.mb-check-encoding.md) | Chamar esta função com null como value ou sem argumento está descontinuado. |
|  | [mhash](function.mhash.md) | Esta função foi descontinuada. Use as funções hash\_\*() em seu lugar. |
|  | [mhash\_count](function.mhash-count.md) | Esta função foi descontinuada. Use as funções hash\_\*() em seu lugar. |
|  | [mhash\_get\_block\_size](function.mhash-get-block-size.md) | Esta função foi descontinuada. Use as funções hash\_\*() em seu lugar. |
|  | [mhash\_get\_hash\_name](function.mhash-get-hash-name.md) | Esta função foi descontinuada. Use as funções hash\_\*() em seu lugar. |
|  | [mhash\_keygen\_s2k](function.mhash-keygen-s2k.md) | Esta função foi descontinuada. Use as funções hash\_\*() em seu lugar. |
|  | [next](function.next.md) | Chamar esta função em objects foi descontinuado. Converta o object para um array usando get\_mangled\_object\_vars primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa Iterator, como ArrayIterator. |
|  | [odbc\_result\_all](function.odbc-result-all.md) | Esta função foi descontinuada. |
|  | [openssl\_cms\_encrypt](function.openssl-cms-encrypt.md) | O algoritmo de criptografia padrão (cipher\_algo) agora é AES-128-CBC (OPENSSL\_CIPHER\_AES\_128\_CBC). Anteriormente, PKCS7/CMS era usado (OPENSSL\_CIPHER\_RC2\_40). |
|  | [openssl\_decrypt](function.openssl-decrypt.md) | tag agora pode ser nulo. |
|  | [openssl\_pkcs7\_encrypt](function.openssl-pkcs7-encrypt.md) | O algoritmo de criptografia padrão (cipher\_algo) agora é AES-128-CBC (OPENSSL\_CIPHER\_AES\_128\_CBC). Anteriormente, PKCS7/CMS era usado (OPENSSL\_CIPHER\_RC2\_40). |
|  | [pg\_affected\_rows](function.pg-affected-rows.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_cancel\_query](function.pg-cancel-query.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_client\_encoding](function.pg-client-encoding.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_close](function.pg-close.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_connect](function.pg-connect.md) | Retorna uma instância PgSql\Connection agora; anteriormente, um resource era retornado. |
|  | [pg\_connect\_poll](function.pg-connect-poll.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_connection\_busy](function.pg-connection-busy.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_connection\_reset](function.pg-connection-reset.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_connection\_status](function.pg-connection-status.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_consume\_input](function.pg-consume-input.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_convert](function.pg-convert.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_copy\_from](function.pg-copy-from.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_copy\_to](function.pg-copy-to.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_dbname](function.pg-dbname.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_delete](function.pg-delete.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_end\_copy](function.pg-end-copy.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_escape\_bytea](function.pg-escape-bytea.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_escape\_identifier](function.pg-escape-identifier.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_escape\_literal](function.pg-escape-literal.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_escape\_string](function.pg-escape-string.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_execute](function.pg-execute.md) | Agora retorna uma instância de PgSql\Result; anteriormente, um resource era retornado. |
|  | [pg\_execute](function.pg-execute.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_fetch\_all](function.pg-fetch-all.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_fetch\_all\_columns](function.pg-fetch-all-columns.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_fetch\_array](function.pg-fetch-array.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_fetch\_assoc](function.pg-fetch-assoc.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_fetch\_object](function.pg-fetch-object.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_fetch\_result](function.pg-fetch-result.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_fetch\_row](function.pg-fetch-row.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_field\_is\_null](function.pg-field-is-null.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_field\_name](function.pg-field-name.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_field\_num](function.pg-field-num.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_field\_prtlen](function.pg-field-prtlen.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_field\_size](function.pg-field-size.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_field\_table](function.pg-field-table.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_field\_type](function.pg-field-type.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_field\_type\_oid](function.pg-field-type-oid.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_flush](function.pg-flush.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_free\_result](function.pg-free-result.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_get\_notify](function.pg-get-notify.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_get\_pid](function.pg-get-pid.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_get\_result](function.pg-get-result.md) | Agora retorna uma instância de PgSql\Result; anteriormente, um resource era retornado. |
|  | [pg\_get\_result](function.pg-get-result.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_host](function.pg-host.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_insert](function.pg-insert.md) | Agora retorna uma instância de PgSql\Result; anteriormente, um resource era retornado. |
|  | [pg\_insert](function.pg-insert.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_last\_error](function.pg-last-error.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_last\_notice](function.pg-last-notice.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_last\_oid](function.pg-last-oid.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_lo\_close](function.pg-lo-close.md) | O parâmetro lob agora espera uma instância de PgSql\Lob; anteriormente, um resource era esperado. |
|  | [pg\_lo\_create](function.pg-lo-create.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_lo\_export](function.pg-lo-export.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_lo\_import](function.pg-lo-import.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_lo\_open](function.pg-lo-open.md) | Retorna uma instância PgSql\Lob agora; anteriormente, um resource era retornado. |
|  | [pg\_lo\_open](function.pg-lo-open.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_lo\_read](function.pg-lo-read.md) | O parâmetro lob agora espera uma instância de PgSql\Lob; anteriormente, um resource era esperado. |
|  | [pg\_lo\_read\_all](function.pg-lo-read-all.md) | O parâmetro lob agora espera uma instância de PgSql\Lob; anteriormente, um resource era esperado. |
|  | [pg\_lo\_seek](function.pg-lo-seek.md) | O parâmetro lob agora espera uma instância de PgSql\Lob; anteriormente, um resource era esperado. |
|  | [pg\_lo\_tell](function.pg-lo-tell.md) | O parâmetro lob agora espera uma instância de PgSql\Lob; anteriormente, um resource era esperado. |
|  | [pg\_lo\_truncate](function.pg-lo-truncate.md) | O parâmetro lob agora espera uma instância de PgSql\Lob; anteriormente, um resource era esperado. |
|  | [pg\_lo\_unlink](function.pg-lo-unlink.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_lo\_write](function.pg-lo-write.md) | O parâmetro lob agora espera uma instância de PgSql\Lob; anteriormente, um resource era esperado. |
|  | [pg\_meta\_data](function.pg-meta-data.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_num\_fields](function.pg-num-fields.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_num\_rows](function.pg-num-rows.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_options](function.pg-options.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_parameter\_status](function.pg-parameter-status.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_pconnect](function.pg-pconnect.md) | Retorna uma instância PgSql\Connection agora; anteriormente, um resource era retornado. |
|  | [pg\_ping](function.pg-ping.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_port](function.pg-port.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_prepare](function.pg-prepare.md) | Agora retorna uma instância de PgSql\Result; anteriormente, um resource era retornado. |
|  | [pg\_prepare](function.pg-prepare.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_put\_line](function.pg-put-line.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_query](function.pg-query.md) | Agora retorna uma instância de PgSql\Result; anteriormente, um resource era retornado. |
|  | [pg\_query](function.pg-query.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_query\_params](function.pg-query-params.md) | Agora retorna uma instância de PgSql\Result; anteriormente, um resource era retornado. |
|  | [pg\_query\_params](function.pg-query-params.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_result\_error](function.pg-result-error.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_result\_error\_field](function.pg-result-error-field.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_result\_seek](function.pg-result-seek.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_result\_status](function.pg-result-status.md) | O parâmetro result agora espera uma instância de PgSql\Result; anteriormente, um resource era esperado. |
|  | [pg\_select](function.pg-select.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_send\_execute](function.pg-send-execute.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_send\_prepare](function.pg-send-prepare.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_send\_query](function.pg-send-query.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_send\_query\_params](function.pg-send-query-params.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_set\_client\_encoding](function.pg-set-client-encoding.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_set\_error\_verbosity](function.pg-set-error-verbosity.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_socket](function.pg-socket.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_trace](function.pg-trace.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_transaction\_status](function.pg-transaction-status.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_tty](function.pg-tty.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_untrace](function.pg-untrace.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_update](function.pg-update.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [pg\_version](function.pg-version.md) | O parâmetro connection agora espera uma instância de PgSql\Connection; anteriormente, um resource era esperado. |
|  | [prev](function.prev.md) | Chamar esta função em objects foi descontinuado. Converta o object para um array usando get\_mangled\_object\_vars primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa Iterator, como ArrayIterator. |
|  | [reset](function.reset.md) | Chamar esta função em objects foi descontinuado. Converta o object para um array usando get\_mangled\_object\_vars primeiro ou, em vez disso, use os métodos fornecidos por uma classe que implementa Iterator, como ArrayIterator. |
|  | [snmp3\_get](function.snmp3-get.md) | O parâmetro auth\_protocol agora aceita "SHA256" e "SHA512" quando suportado por libnetsnmp. |
|  | [snmp3\_getnext](function.snmp3-getnext.md) | O parâmetro auth\_protocol agora aceita "SHA256" e "SHA512" quando suportado por libnetsnmp. |
|  | [snmp3\_real\_walk](function.snmp3-real-walk.md) | O parâmetro auth\_protocol agora aceita "SHA256" e "SHA512" quando suportado por libnetsnmp. |
|  | [snmp3\_walk](function.snmp3-walk.md) | O parâmetro auth\_protocol agora aceita "SHA256" e "SHA512" quando suportado por libnetsnmp. |
|  | [stream\_select](function.stream-select.md) | microseconds agora pode ser nulo. |
|  | [strptime](function.strptime.md) | Esta função foi descontinuada. Use date\_parse\_from\_format no lugar (para análise independente de localidade), ou IntlDateFormatter::parse (para análise dependente de localidade). |
|  | [IntlDateFormatter::create](intldateformatter.create.md) | Parêmatros dateType e timeType agora são opcionais. |
|  | [MultipleIterator::current](multipleiterator.current.md) | Uma RuntimeException agora é lançada se MultipleIterator::current for chamado em um iterador inválido. Anteriormente, false era retornado. |
|  | [MultipleIterator::key](multipleiterator.key.md) | Um RuntimeException agora é lançado se MultipleIterator::key for chamado em um iterador inválido. Anteriormente, retornava false. |
|  | [mysqli\_driver::$report\_mode](mysqli-driver.report-mode.md) | O valor padrão agora é MYSQLI\_REPORT\_ERROR | MYSQLI\_REPORT\_STRICT. Anteriormente, era MYSQLI\_REPORT\_OFF. |
|  | [mysqli\_result::fetch\_all](mysqli-result.fetch-all.md) | Agora também disponível com a biblioteca libmysqlclient. |
|  | [mysqli\_stmt::execute](mysqli-stmt.execute.md) | O parâmetro optional params foi adicionado. |
|  | [mysqli\_stmt::next\_result](mysqli-stmt.next-result.md) | Agora também disponível com a biblioteca libmysqlclient. |
|  | [mysqli::\_\_construct](mysqli.construct.md) | Agora, o método mysqli::connect retorna true em vez de null em caso de sucesso. |
|  | [mysqli::$client\_info](mysqli.get-client-info.md) | Chamar mysqli\_get\_client\_info com o argumento mysql foi descontinuado. Esta função nunca requereu um parâmetro, mas incorretamente permitia este parâmetro opcional. |
|  | [mysqli::$client\_info](mysqli.get-client-info.md) | O método orientado a objeto mysqli::get\_client\_info foi descontinuado. |
|  | [mysqli::init](mysqli.init.md) | O método mysqli::init com estilo orientado a objeto foi descontinuado. Substitua as chamadas a parent::init por parent::\_\_construct. |
|  | [Phar::buildFromDirectory](phar.buildfromdirectory.md) | Phar::buildFromDirectory não retorna mais false. |
|  | [Phar::buildFromIterator](phar.buildfromiterator.md) | Phar::buildFromIterator não retorna mais false. |
|  | [PharData::buildFromDirectory](phardata.buildfromdirectory.md) | PharData::buildFromDirectory não retorna mais false. |
|  | [PharData::buildFromIterator](phardata.buildfromiterator.md) | PharData::buildFromIterator não retorna mais false. |
|  | [ReflectionFunctionAbstract::isStatic](reflectiofunctionabstract.isstatic.md) | Este método foi atualizado. Anteriormente, era definido apenas em ReflectionMethod. |
|  | [ReflectionClassConstant::getName](reflectionclassconstant.getname.md) | Lança um Error caso a propriedade name não tenha sido inicializada. Anteriormente, o método retornava false em caso de falha. |
|  | [ReflectionExtension::\_\_clone](reflectionextension.clone.md) | Este método não é mais final. |
|  | [ReflectionFunctionAbstract::\_\_clone](reflectionfunctionabstract.clone.md) | Este método não é mais final. |
|  | [ReflectionMethod::setAccessible](reflectionmethod.setaccessible.md) | Chamar este método não tem efeito; todos os métodos são chamados por padrão. |
|  | [ReflectionParameter::\_\_clone](reflectionparameter.clone.md) | Este método não é mais final. |
|  | [ReflectionProperty::\_\_clone](reflectionproperty.clone.md) | Este método não é mais final. |
|  | [ReflectionProperty::getValue](reflectionproperty.getvalue.md) | Propriedades privadas e protegidas podem ser acessadas por ReflectionProperty::getValue imediatamente. Anteriormente, elas precisavam ser acessíveis chamando ReflectionProperty::setAccessible; caso contrário uma ReflectionException era lançada. |
|  | [ReflectionProperty::setAccessible](reflectionproperty.setaccessible.md) | Chamar este método não tem efeito; todas as propriedades são acessíveis por padrão. |
|  | [ReflectionProperty::setValue](reflectionproperty.setvalue.md) | Propriedades privadas e protegidas podem ser acessadas por ReflectionProperty::setValue imediatamente. Anteriormente, eles precisavam ser acessíveis chamando ReflectionProperty::setAccessible; caso contrário, uma ReflectionException era lançada. |
|  | [ReflectionZendExtension::\_\_clone](reflectionzendextension.clone.md) | Este método não é mais final. |
|  | [SimpleXMLElement::current](simplexmlelement.current.md) | Um Error agora é lançado se SimpleXMLElement::current for chamado em um iterador inválido. Anteriormente, null era retornado. |
|  | [SimpleXMLElement::key](simplexmlelement.key.md) | Um Error agora é lançado se SimpleXMLElement::key for chamado em um iterador inválido. Anteriormente, false era retornado. |
|  | [SplFileObject::fputcsv](splfileobject.fputcsv.md) | O parâmetro opcional eol foi adicionado. |
|  | [SplObjectStorage::current](splobjectstorage.current.md) | SplObjectStorage::current agora lança uma exceção Error se a posição atual for inválida. Anteriormente, false era retornado. |
|  | [SQLite3Result::finalize](sqlite3result.finalize.md) | Este método agora lança uma exceção Error se o objeto não for inicializado corretamente. Anteriormente, retornava false. |
|  | [SQLite3Stmt::close](sqlite3stmt.close.md) | Este método agora lança uma exceção Error se o objeto não for inicializado corretamente. Anteriormente, retornava false. |
| 8.0.21 | [DateTime::createFromFormat](datetime.createfromformat.md) | Agora dispara ValueError quando bytes nulos são passados pelo parâmetro datetime, o que antes era silencioamente ignorado. |
|  | [DateTimeImmutable::createFromFormat](datetimeimmutable.createfromformat.md) | Agora lança a exceção ValueError quando bytes nulos são passados no parâmetro datetime, o que antes era silenciosamente ignorado. |
|  | [date\_parse\_from\_format](function.date-parse-from-format.md) | Agora lança ValueError quando bytes nulos são passados por datetime, o que antes era silenciosamente ignorado. |
| 8.0.5 | [imageinterlace](function.imageinterlace.md) | imageinterlace agora retorna um bool; anteriormente retornava um int (não zero para imagens entrelaçadas, zero caso contrário). |
| 8.0.3 | [DOMDocument::getElementsByTagNameNS](domdocument.getelementsbytagnamens.md) | namespace agora pode ser nulo. |
|  | [DOMElement::getElementsByTagNameNS](domelement.getelementsbytagnamens.md) | namespace é anulável agora. |
|  | [DOMImplementation::createDocument](domimplementation.createdocument.md) | namespace agora é anulável. |
|  | [finfo::\_\_construct](finfo.construct.md) | O parâmetro magic\_database agora pode ser nulo. |
|  | [bind\_textdomain\_codeset](function.bind-textdomain-codeset.md) | codeset agora pode ser nulo. Anteriormente, não era possível recuperar a codificação definida. |
|  | [bindtextdomain](function.bindtextdomain.md) | directory agora pode ser nulo. Anteriormente, não era possível recuperar o diretório definido para o domínio. |
|  | [finfo\_open](function.finfo-open.md) | O parâmetro magic\_database agora pode ser nulo. |
|  | [imagegd](function.imagegd.md) | file agora pode ser nulo. |
|  | [imagegd2](function.imagegd2.md) | file agora pode ser nulo. |
|  | [SoapClient::\_\_setLocation](soapclient.setlocation.md) | location agora é anulável. |
|  | [SoapVar::\_\_construct](soapvar.construct.md) | typeName, typeNamespace, nodeName e nodeNamespace agora são anuláveis. |
| 8.0.0 | [CURLFile::\_\_construct](curlfile.construct.md) | mime\_type e posted\_filename agora podem ser nulos; anteriormente seus valores padrões eram 0. |
|  | [DateInterval::\_\_construct](dateinterval.construct.md) | W pode ser combinado com D. |
|  | [DateTime::createFromImmutable](datetime.createfromimmutable.md) | O método agora retorna uma instância da classe que está sendo chamada. Anteriormente, ele criava uma nova instância de DateTime. |
|  | [DateTimeInterface::format](datetime.format.md) | O caractere de formatação p foi adicionado. |
|  | [DateTimeInterface::getTimestamp](datetime.gettimestamp.md) | Esta função não mais retorna false em caso de falha. |
|  | [DateTimeImmutable::createFromMutable](datetimeimmutable.createfrommutable.md) | O método agora retorna uma instância da classe atualmente chamada. Antes, ele criava um nova instância de DateTimeImmutable. |
|  | [DateTimeZone::listIdentifiers](datetimezone.listidentifiers.md) | Antes desta versão, false era retornado em caso de falha. |
|  | [Directory::close](directory.close.md) | Nenhum parâmetro é aceito. Anteriormente, um manipulador de diretório poderia ser passado como argumento. |
|  | [Directory::read](directory.read.md) | Nenhum parâmetro é aceito. Anteriormente, um manipulador de diretório poderia ser passado como argumento. |
|  | [Directory::rewind](directory.rewind.md) | Nenhum parâmetro é aceito. Anteriormente, um manipulador de diretório poderia ser passado como argumento. |
|  | [DirectoryIterator::\_\_construct](directoryiterator.construct.md) | Agora Lança um ValueError se directory for uma string vazia; anteriormente, lançava um RuntimeException. |
|  | [DOMDocument::load](domdocument.load.md) | Chamar esta função estaticamente agora irá gerar um Error. Anteriormente, era gerado um E\_DEPRECATED. |
|  | [DOMDocument::loadHTML](domdocument.loadhtml.md) | Chamando esta função estaticamente agora irá gerar um Error. Anteriormente, era gerado um E\_DEPRECATED. |
|  | [DOMDocument::loadHTMLFile](domdocument.loadhtmlfile.md) | Chamando esta função estaticamente agora irá gerar um Error. Anteriormente, era gerado um E\_DEPRECATED. |
|  | [DOMDocument::loadXML](domdocument.loadxml.md) | Chamando esta função estaticamente agora irá gerar um Error. Anteriormente, era gerado um E\_DEPRECATED. |
|  | [DOMImplementation::createDocument](domimplementation.createdocument.md) | doctype agora é anulável. |
|  | [DOMImplementation::createDocument](domimplementation.createdocument.md) | Chamar esta função estaticamente agora lançará um Error. Anteriormente, era gerado um E\_DEPRECATED. |
|  | [DOMImplementation::createDocumentType](domimplementation.createdocumenttype.md) | Chamar esta função estaticamente agora lançará um Error. Anteriormente, era gerado um E\_DEPRECATED. |
|  | [DOMImplementation::hasFeature](domimplementation.hasfeature.md) | Chamar esta função estaticamente agora lançará um Error. Anteriormente, era gerado um E\_DEPRECATED. |
|  | [FFI::cdef](ffi.cdef.md) | lib agora pode ser nulo. |
|  | [FFI::string](ffi.string.md) | size agora pode ser nulo; anteriormente seu padrão era 0. |
|  | [FilesystemIterator::\_\_construct](filesystemiterator.construct.md) | Agora lança um ValueError se directory for uma string vazia; anteriormente lançava um RuntimeException. |
|  | [abs](function.abs.md) | num não aceita mais objetos internos que suportem conversão numérica. |
|  | [apache\_note](function.apache-note.md) | note\_value agora permite null. |
|  | [array\_chunk](function.array-chunk.md) | Se length for menor que 1, agora um ValueError é lançado; antes, um erro de nível E\_WARNING era emitido em vez de retornar null. |
|  | [array\_column](function.array-column.md) | Objetos em colunas indicadas pelo parâmetro index\_key não serão mais convertidos em string e agora irão lançar um TypeError em vez disso. |
|  | [array\_combine](function.array-combine.md) | array\_combine será agora dispara ValueError se o numero de elementos para cada array não é igual; antes esta função retorna false no lugar. |
|  | [array\_diff](function.array-diff.md) | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |
|  | [array\_diff\_assoc](function.array-diff-assoc.md) | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |
|  | [array\_diff\_key](function.array-diff-key.md) | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |
|  | [array\_fill](function.array-fill.md) | array\_fill agora lança um ValueError se count estiver fora de alance; anteriormente um E\_WARNING era disparado, e a função retornava false. |
|  | [array\_filter](function.array-filter.md) | callback agora é anulável. |
|  | [array\_filter](function.array-filter.md) | Se a função callback espera que um parâmetro seja passado por referência, esta função agora emitirá um E\_WARNING. |
|  | [array\_intersect](function.array-intersect.md) | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |
|  | [array\_intersect\_assoc](function.array-intersect-assoc.md) | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |
|  | [array\_intersect\_key](function.array-intersect-key.md) | Esta função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |
|  | [array\_key\_exists](function.array-key-exists.md) | O parâmetro key agora aceita bool, float, int, null, resource e string como argumentos. |
|  | [array\_key\_exists](function.array-key-exists.md) | Passar um object para o parâmetro array não é mais suportado. |
|  | [array\_map](function.array-map.md) | Se a função callback espera que um parâmetro seja passado por referência, esta função agora emitirá um E\_WARNING. |
|  | [array\_rand](function.array-rand.md) | array\_rand agora lança uma exceção ValueError se num estiver fora do intervalo; anteriormente um E\_WARNING era emitido, e a função retornava null. |
|  | [array\_rand](function.array-rand.md) | array\_rand agora lança uma exceção ValueError se array estiver vazio; anteriormente um E\_WARNING era emitido, e a função retornava null. |
|  | [array\_reduce](function.array-reduce.md) | Se a função callback espera que um parâmetro seja passado por referência, esta função agora emitirá um E\_WARNING. |
|  | [array\_splice](function.array-splice.md) | length agora é anulável. |
|  | [array\_walk](function.array-walk.md) | Se callback espera que o segundo ou o terceiro parâmetro seja passado por referência, essa função agora emite um E\_WARNING. |
|  | [assert](function.assert.md) | assert não mais avaliará argumentos strings, e por outro lado elas serão tratadas como um argumento comum. assert($a == $b) deve ser utilizado ao invés de assert('$a == $b'). A diretiva assert.quiet\_eval php.ini e a constante ASSERT\_QUIET\_EVAL também foram removidos, dado que elas não tem mais nenhum efeito. |
|  | [assert](function.assert.md) | Se description é uma instância de Throwable, a exceção é lançada no caso da asserção falhar, independentemente do valor de assert.exception. |
|  | [assert](function.assert.md) | Se description é uma instância de Throwable, o callback não é chamado, mesmo que ele seja informado. |
|  | [assert](function.assert.md) | Declarar uma função chamada assert() dentro de um namespace não é mais permitido, e emite um E\_COMPILE\_ERROR. |
|  | [assert\_options](function.assert-options.md) | Se option não for uma opção válida, uma exceção ValueError é lançada. Anteriormente, false era retornado. |
|  | [bcadd](function.bcadd.md) | scale agora pode ser nulo. |
|  | [bccomp](function.bccomp.md) | scale pode ser nulo. |
|  | [bcdiv](function.bcdiv.md) | scale agora pode ser nulo. |
|  | [bcdiv](function.bcdiv.md) | Dividir por 0 agora lança uma exceção DivisionByZeroError ao invés de retornar null. |
|  | [bcmod](function.bcmod.md) | scale pode ser null. |
|  | [bcmod](function.bcmod.md) | Dividir por 0 agora lança uma exceção DivisionByZeroError ao invés de retornar null. |
|  | [bcmul](function.bcmul.md) | scale agora pode ser nulo. |
|  | [bcpow](function.bcpow.md) | Quando exponent tem uma parte fracionária, lança uma exceção ValueError ao invés de truncar o valor. |
|  | [bcpowmod](function.bcpowmod.md) | scale agora pode ser nulo. |
|  | [bcpowmod](function.bcpowmod.md) | Agora lança uma exceção ValueError ao invés de retornar false se exponent for negativo. |
|  | [bcpowmod](function.bcpowmod.md) | Dividir por 0 agora lança uma exceção DivisionByZeroError ao invés de retornar false. |
|  | [bcscale](function.bcscale.md) | scale agora pode ser null. |
|  | [bcsqrt](function.bcsqrt.md) | Se num não é uma string numérica no padrão BCMath, ou menor que 0, um ValueError é lançado. Anteriormente um E\_WARNING era emitido. |
|  | [bcsqrt](function.bcsqrt.md) | scale agora precisa estar entre 0 e 2147483647; anteriormente, valores negativos eram tratados silenciosamente como 0. |
|  | [bcsqrt](function.bcsqrt.md) | scale agora é anulável. |
|  | [bcsub](function.bcsub.md) | scale agora pode ser nulo. |
|  | [bzdecompress](function.bzdecompress.md) | O tipo do parâmetro use\_less\_memory mudou de int para bool. Anteriormente, o valor padrão era 0. |
|  | [bzwrite](function.bzwrite.md) | length agora pode ser nulo. |
|  | [call\_user\_func\_array](function.call-user-func-array.md) | As chaves de args agora serão interpretadas como nomes de parâmetros, ao invés de serem silenciosamente ignorados. |
|  | [ceil](function.ceil.md) | num não mais aceita objetos internos que suportam conversão numérica. |
|  | [closedir](function.closedir.md) | dir\_handle agora pode ser nulo. |
|  | [com\_event\_sink](function.com-event-sink.md) | sink\_interface agora pode ser nulo. |
|  | [com\_get\_active\_object](function.com-get-active-object.md) | codepage agora pode ser nulo. |
|  | [compact](function.compact.md) | Se uma determinada string fizer referência a uma variável não definida, um erro de nível E\_WARNING será emitido. |
|  | [constant](function.constant.md) | Se a constante não estiver definida, constant agora lança uma exceção Error; anteriormente um E\_WARNING era gerado e null era retornado. |
|  | [convert\_cyr\_string](function.convert-cyr-string.md) | Esta função foi removida. |
|  | [convert\_uuencode](function.convert-uuencode.md) | Antes desta versão, tentar converter uma string vazia retornava false sem nenhuma razão particular. |
|  | [count](function.count.md) | count irá agora disparar TypeError em tipos contáveis inválidos passados no parâmetro value. |
|  | [count\_chars](function.count-chars.md) | Antes desta versão, a função retornava false em caso de falha. |
|  | [crypt](function.crypt.md) | O parâmetro salt não é mais opcional. |
|  | [curl\_close](function.curl-close.md) | Esta função agora é um NOP. |
|  | [curl\_close](function.curl-close.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_copy\_handle](function.curl-copy-handle.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_copy\_handle](function.curl-copy-handle.md) | Em caso de sucesso, esta função agora retorna uma instância CurlHandle; anteriormente, retornava um recurso do tipo resource. |
|  | [curl\_errno](function.curl-errno.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_error](function.curl-error.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_escape](function.curl-escape.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_exec](function.curl-exec.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_getinfo](function.curl-getinfo.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_getinfo](function.curl-getinfo.md) | option agora pode ser nulo; anteriormente, o padrão era 0. |
|  | [curl\_init](function.curl-init.md) | No caso de sucesso, a função retorna uma instância de CurlHandle; anteriormente retornava um resource. |
|  | [curl\_init](function.curl-init.md) | url agora pode ser nulo. |
|  | [curl\_multi\_add\_handle](function.curl-multi-add-handle.md) | O parâmetro multi\_handle agora espera uma instância de CurlMultiHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_add\_handle](function.curl-multi-add-handle.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_close](function.curl-multi-close.md) | O parâmetro multi\_handle agora espera uma instância de CurlMultiHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_errno](function.curl-multi-errno.md) | A função não retorna mais false em caso de falha. |
|  | [curl\_multi\_errno](function.curl-multi-errno.md) | O parâmetro multi\_handle agora espera uma instância de CurlMultiHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_exec](function.curl-multi-exec.md) | O parâmetro multi\_handle agora espera uma instância de CurlMultiHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_getcontent](function.curl-multi-getcontent.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_info\_read](function.curl-multi-info-read.md) | O parâmetro multi\_handle agora espera uma instância de CurlMultiHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_init](function.curl-multi-init.md) | Em caso de sucesso, esta função agora retorna uma instância de CurlMultiHandle; anteriormente, um recurso do tipo resource era retornado. |
|  | [curl\_multi\_remove\_handle](function.curl-multi-remove-handle.md) | O parâmetro multi\_handle agora espera uma instância de CurlMultiHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_remove\_handle](function.curl-multi-remove-handle.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_select](function.curl-multi-select.md) | O parâmetro multi\_handle agora espera uma instância de CurlMultiHandle; anteriormente, um resource era esperado. |
|  | [curl\_multi\_setopt](function.curl-multi-setopt.md) | O parâmetro multi\_handle agora espera uma instância de CurlMultiHandle; anteriormente, um resource era esperado. |
|  | [curl\_pause](function.curl-pause.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_reset](function.curl-reset.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_setopt](function.curl-setopt.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_setopt\_array](function.curl-setopt-array.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_share\_close](function.curl-share-close.md) | Esta função agora é um NOP. |
|  | [curl\_share\_close](function.curl-share-close.md) | O parâmetro share\_handle agora espera uma instância de CurlShareHandle; anteriormente, um resource era esperado. |
|  | [curl\_share\_errno](function.curl-share-errno.md) | A função não retorna mais false em caso de falha. |
|  | [curl\_share\_errno](function.curl-share-errno.md) | O parâmetro share\_handle agora espera uma instância de CurlShareHandle; anteriormente, um resource era esperado. |
|  | [curl\_share\_init](function.curl-share-init.md) | Este função agora retorna uma instância de CurlShareHandle; anteriormente, um recurso do tipo resource era retornado. |
|  | [curl\_share\_setopt](function.curl-share-setopt.md) | O parâmetro share\_handle agora espera uma instância de CurlShareHandle; anteriormente, um resource era esperado. |
|  | [curl\_unescape](function.curl-unescape.md) | O parâmetro handle agora espera uma instância de CurlHandle; anteriormente, um resource era esperado. |
|  | [curl\_version](function.curl-version.md) | O parâmetro opcional age foi removido. |
|  | [date](function.date.md) | timestamp agora pode ser nulo. |
|  | [date\_sunrise](function.date-sunrise.md) | latitude, longitude, zenith e utcOffset agora podem ser nulos. |
|  | [date\_sunset](function.date-sunset.md) | latitude, longitude, zenith e utcOffset agora podem ser nulos. |
|  | [define](function.define.md) | Passar true para case\_insensitive agora emite um E\_WARNING. Passar false ainda é permitido. |
|  | [deflate\_add](function.deflate-add.md) | context espera agora uma instância de DeflateContext; anteriormente, era esperado um resource. |
|  | [deflate\_init](function.deflate-init.md) | Em caso de sucesso, esta função retorna agora uma instância de DeflateContext; anteriormente, um resource era retornado. |
|  | [dir](function.dir.md) | context agora pode ser nulo. |
|  | [dom\_import\_simplexml](function.dom-import-simplexml.md) | Esta função não retorna mais null em caso de falha. |
|  | [easter\_date](function.easter-date.md) | year agora pode ser nulo. |
|  | [easter\_date](function.easter-date.md) | Uma exceção ValueError agora é lançada quando year estiver fora do intervalo permitido. Anteriormente, um E\_WARNING era emitido e a função retornava false. |
|  | [easter\_days](function.easter-days.md) | year agora pode ser nulo. |
|  | [enchant\_broker\_describe](function.enchant-broker-describe.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_describe](function.enchant-broker-describe.md) | Antes deseta versão, a função retornava false em caso de falha. |
|  | [enchant\_broker\_dict\_exists](function.enchant-broker-dict-exists.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_free](function.enchant-broker-free.md) | Esta função foi descontinuada em favor de remover a definição do objeto. |
|  | [enchant\_broker\_free](function.enchant-broker-free.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_free\_dict](function.enchant-broker-free-dict.md) | Esta função foi descontinuada em favor de remover a definição do objeto. |
|  | [enchant\_broker\_free\_dict](function.enchant-broker-free-dict.md) | dictionary agora espera um objeto EnchantDictionary; anteriormente, esperava um resource. |
|  | [enchant\_broker\_get\_dict\_path](function.enchant-broker-get-dict-path.md) | Esta função foi descontinuada. |
|  | [enchant\_broker\_get\_dict\_path](function.enchant-broker-get-dict-path.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_get\_error](function.enchant-broker-get-error.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_init](function.enchant-broker-init.md) | Em caso de sucesso, esta função agora retorna uma instância de EnchantBroker; anteriormente, retornava um resource. |
|  | [enchant\_broker\_list\_dicts](function.enchant-broker-list-dicts.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_list\_dicts](function.enchant-broker-list-dicts.md) | Antes desta versão, a função retornava false em caso de falha. |
|  | [enchant\_broker\_request\_dict](function.enchant-broker-request-dict.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_request\_dict](function.enchant-broker-request-dict.md) | Em caso de sucesso, esta função agora retorna uma instância de EnchantDictionary; anteriormente, um resource era retornado. |
|  | [enchant\_broker\_request\_pwl\_dict](function.enchant-broker-request-pwl-dict.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_request\_pwl\_dict](function.enchant-broker-request-pwl-dict.md) | Em caso de sucesso, esta função agora retorna uma instância de EnchantDictionary; anteriormente, um resource era retornado. |
|  | [enchant\_broker\_set\_dict\_path](function.enchant-broker-set-dict-path.md) | Esta função foi descontinuada. |
|  | [enchant\_broker\_set\_dict\_path](function.enchant-broker-set-dict-path.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_broker\_set\_ordering](function.enchant-broker-set-ordering.md) | O parâmetro broker agora espera uma instância de EnchantBroker; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_add](function.enchant-dict-add.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_add\_to\_session](function.enchant-dict-add-to-session.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_check](function.enchant-dict-check.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_describe](function.enchant-dict-describe.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_describe](function.enchant-dict-describe.md) | Antes desta versão, a função retornava false em caso de falha. |
|  | [enchant\_dict\_get\_error](function.enchant-dict-get-error.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_is\_added](function.enchant-dict-is-added.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_quick\_check](function.enchant-dict-quick-check.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_store\_replacement](function.enchant-dict-store-replacement.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [enchant\_dict\_suggest](function.enchant-dict-suggest.md) | O parâmetro dictionary agora espera uma instância de EnchantDictionary; anteriormente, um resource era esperado. |
|  | [error\_log](function.error-log.md) | destination e additional\_headers agora permitem null. |
|  | [error\_reporting](function.error-reporting.md) | error\_level agora permite null. |
|  | [exec](function.exec.md) | Se command estiver vazio ou contiver bytes nulos, exec agora lança uma exceção ValueError. Anteriormente emitia um erro de nível E\_WARNING e retornava false. |
|  | [exif\_read\_data](function.exif-read-data.md) | required\_sections agora pode ser nulo. |
|  | [explode](function.explode.md) | explode agora lança um ValueError quando separator é informado com uma string vazia (""). Anteriormente, explode retornava false nesse caso. |
|  | [ezmlm\_hash](function.ezmlm-hash.md) | Esta função foi removida. |
|  | [fgetcsv](function.fgetcsv.md) | O parâmetro length agora pode ser nulo. |
|  | [file\_get\_contents](function.file-get-contents.md) | length agora é anulável. |
|  | [finfo\_buffer](function.finfo-buffer.md) | O parâmetro context agora pode ser nulo. |
|  | [finfo\_file](function.finfo-file.md) | O parâmetro context agora pode ser nulo. |
|  | [floatval](function.floatval.md) | O nível de erro ao converter um objeto mudou de E\_NOTICE para E\_WARNING. |
|  | [floor](function.floor.md) | num não mais aceita tipos internos que suportam conversão numérica. |
|  | [fprintf](function.fprintf.md) | Esta função não retorna mais false em caso de falha. |
|  | [fprintf](function.fprintf.md) | Lança um erro ValueError se o número de argumentos for zero; anteriormente, esta função emitia um E\_WARNING. |
|  | [fprintf](function.fprintf.md) | Lança um erro ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [fprintf](function.fprintf.md) | Lança um erro ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [fprintf](function.fprintf.md) | Lança um erro ArgumentCountError quando menos argumentos do que o necessário são fornecidos; anteriormente, esta função emitia um E\_WARNING. |
|  | [fsockopen](function.fsockopen.md) | timeout agora pode ser nulo. |
|  | [fwrite](function.fwrite.md) | length pode ser null. |
|  | [get\_called\_class](function.get-called-class.md) | Chamar esta função de fora de uma classe agora irá disparar um Error. Anteriormente, um aviso E\_WARNING era emitido e a função retornava false. |
|  | [get\_class](function.get-class.md) | Chamar esta função de fora de uma classe, sem argumentos, agora dispara um Error. Anteriormente, um alerta E\_WARNING era emitido e a função retornava false. |
|  | [get\_class\_methods](function.get-class-methods.md) | O parâmetro object\_or\_class agora aceita apenas objetos ou nomes de classe válidos. |
|  | [get\_defined\_functions](function.get-defined-functions.md) | O valor padrão do parâmetro exclude\_disabled mudou de false para true. Entretanto, ele não terá qualquer efeito já que as funções desabilitadas são removidas da tabela de funções no momento da compilação. |
|  | [get\_headers](function.get-headers.md) | O parâmetro associative foi modificado de int para bool. |
|  | [get\_magic\_quotes\_gpc](function.get-magic-quotes-gpc.md) | Esta função foi removida. |
|  | [get\_magic\_quotes\_runtime](function.get-magic-quotes-runtime.md) | Esta função foi removida. |
|  | [get\_parent\_class](function.get-parent-class.md) | O parâmetro object\_or\_class agora aceita apenas objetos ou nomes de classe válidos. |
|  | [get\_resources](function.get-resources.md) | type agora pode ser nulo. |
|  | [getdate](function.getdate.md) | timestamp agora pode ser nulo. |
|  | [getenv](function.getenv.md) | O parâmetro name agora pode ser nulo. |
|  | [getimagesize](function.getimagesize.md) | Um ValueError agora é lançado se filename estiver vazio; anteriormente, um E\_WARNING era emitido e a função retornava false. |
|  | [gmdate](function.gmdate.md) | timestamp agora é anulável. |
|  | [gmmktime](function.gmmktime.md) | hour não é mais opcional. Se for necessário um timestamp Unix, use time. |
|  | [gmmktime](function.gmmktime.md) | minute, second, month, day e year agora podem ser nulos. |
|  | [gmp\_binomial](function.gmp-binomial.md) | Esta função não mais retorna false em caso de falha. |
|  | [gmp\_export](function.gmp-export.md) | Esta função não mais retorna false em caso de falha. |
|  | [gmp\_import](function.gmp-import.md) | Esta função não mais retorna false em caso de falha. |
|  | [gmp\_random\_seed](function.gmp-random-seed.md) | Se seed for inválido, gmp\_random\_seed agora lança uma exceção ValueError. Anteriormente, emitia um E\_WARNING e retornava false. |
|  | [gmstrftime](function.gmstrftime.md) | timestamp agora pode ser nulo. |
|  | [grapheme\_substr](function.grapheme-substr.md) | A função agora fixa consistentemente deslocamentos fora dos limites ao limite da string. Anteriormente, false era retornado em vez da string vazia em alguns casos. |
|  | [gzgets](function.gzgets.md) | length pode ser null; anteriormente, o padrão era 1024. |
|  | [gzwrite](function.gzwrite.md) | length permite null; anteriormente o default era 0. |
|  | [hash](function.hash.md) | Agora lança uma exceção ValueError se algo for desconhecido; anteriormente, false era retornado e uma mensagem E\_WARNING era emitida. |
|  | [hash\_hkdf](function.hash-hkdf.md) | Agora lança uma exceção ValueError em caso de erro. Anteriormente, false era retornado e uma mensagem E\_WARNING era emitida. |
|  | [hash\_hmac](function.hash-hmac.md) | Agora lança uma exceção ValueError se algo for desconhecido ou for uma função hash não criptográfica; anteriormente, false era retornado e uma mensagem E\_WARNING era emitida. |
|  | [hash\_hmac\_file](function.hash-hmac-file.md) | Agora lança uma exceção ValueError se algo for desconhecido ou for uma função hash não criptográfica; anteriormente, false era retornado e uma mensagem E\_WARNING era emitida. |
|  | [hash\_init](function.hash-init.md) | Agora lança uma exceção ValueError se o algo for desconhecido ou for uma função hash não criptográfica ou se key estiver vazio. Anteriormente, false era retornado e uma mensagem E\_WARNING era emitida. |
|  | [hash\_pbkdf2](function.hash-pbkdf2.md) | Agora lança uma exceção ValueError em caso de erro. Anteriormente, false era retornado e uma mensagem E\_WARNING era emitida. |
|  | [hash\_update\_file](function.hash-update-file.md) | stream\_context agora pode ser nulo. |
|  | [header\_remove](function.header-remove.md) | name agora pode ser nulo. |
|  | [hebrevc](function.hebrevc.md) | Esta função foi removida. |
|  | [html\_entity\_decode](function.html-entity-decode.md) | encoding agora pode ser nulo. |
|  | [htmlentities](function.htmlentities.md) | encoding agora pode ser nulo. |
|  | [http\_build\_query](function.http-build-query.md) | arg\_separator agora é anulável. |
|  | [iconv\_mime\_decode](function.iconv-mime-decode.md) | encoding é anulável agora. |
|  | [iconv\_mime\_decode\_headers](function.iconv-mime-decode-headers.md) | encoding é anulável agora. |
|  | [iconv\_strlen](function.iconv-strlen.md) | encoding é anulável agora. |
|  | [iconv\_strpos](function.iconv-strpos.md) | encoding é anulável agora. |
|  | [iconv\_strrpos](function.iconv-strrpos.md) | encoding é anulável agora. |
|  | [iconv\_substr](function.iconv-substr.md) | length e encoding são anuláveis agora. |
|  | [idate](function.idate.md) | timestamp agora pode ser nulo. |
|  | [ignore\_user\_abort](function.ignore-user-abort.md) | enable agora pode ser nulo. |
|  | [imageaffine](function.imageaffine.md) | clip agora pode ser nulo. |
|  | [imageaffine](function.imageaffine.md) | Em caso de sucesso, esta função retorna uma instância de GDImage agora; anteriormente, um resource era retornado. |
|  | [imagealphablending](function.imagealphablending.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imageantialias](function.imageantialias.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagearc](function.imagearc.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagebmp](function.imagebmp.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagebmp](function.imagebmp.md) | O tipo de compressed agora é bool; anteriormente era int. |
|  | [imagechar](function.imagechar.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecharup](function.imagecharup.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorallocate](function.imagecolorallocate.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorallocatealpha](function.imagecolorallocatealpha.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorat](function.imagecolorat.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorclosest](function.imagecolorclosest.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorclosesthwb](function.imagecolorclosesthwb.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolordeallocate](function.imagecolordeallocate.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorexact](function.imagecolorexact.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorexactalpha](function.imagecolorexactalpha.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolormatch](function.imagecolormatch.md) | image1 e image2 agora esperam instâncias de GdImage; anteriormente, resources eram esperados. |
|  | [imagecolorresolve](function.imagecolorresolve.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorresolvealpha](function.imagecolorresolvealpha.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorset](function.imagecolorset.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorsforindex](function.imagecolorsforindex.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolorsforindex](function.imagecolorsforindex.md) | imagecolorsforindex agora lança uma exceção ValueError se color estiver fora dos limites; anteriormente, false era retornado. |
|  | [imagecolorstotal](function.imagecolorstotal.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolortransparent](function.imagecolortransparent.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecolortransparent](function.imagecolortransparent.md) | color agora pode ser nulo. |
|  | [imageconvolution](function.imageconvolution.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecopy](function.imagecopy.md) | dst\_image e src\_image esperam instâncias de GdImage; anteriormente, esperavam resource. |
|  | [imagecopymerge](function.imagecopymerge.md) | dst\_image e src\_image esperam instâncias GdImage agora; anteriormente, resources eram esperados. |
|  | [imagecopymergegray](function.imagecopymergegray.md) | dst\_image e src\_image esperam instâncias GdImage agora; anteriormente, resources eram esperados. |
|  | [imagecopyresampled](function.imagecopyresampled.md) | dst\_image e src\_image esperam instâncias GdImage agora; anteriormente, resources eram esperadas. |
|  | [imagecopyresized](function.imagecopyresized.md) | dst\_image e src\_image esperam instâncias GdImage agora; anteriormente, resources eram esperadas. |
|  | [imagecreate](function.imagecreate.md) | Em caso de sucesso, esta função agora retorna uma instância de GDImage; anteriormente, era retornado um resource. |
|  | [imagecreatefrombmp](function.imagecreatefrombmp.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecreatefromgd](function.imagecreatefromgd.md) | Em caso de sucesso, esta função agora retorna uma instância de GDImage; anteriormente, era retornado um resource. |
|  | [imagecreatefromgd2](function.imagecreatefromgd2.md) | Em caso de sucesso, esta função agora retorna uma instância de GDImage; anteriormente, era retornado um resource. |
|  | [imagecreatefromgd2part](function.imagecreatefromgd2part.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecreatefromgif](function.imagecreatefromgif.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecreatefromjpeg](function.imagecreatefromjpeg.md) | Caso for sucesso, esta função agora retorna uma instância de GDImage; anteriormente, era retornado um resource. |
|  | [imagecreatefrompng](function.imagecreatefrompng.md) | Caso for sucesso, esta função agora retorna uma instância de GDImage; anteriormente, era retornado um resource. |
|  | [imagecreatefromstring](function.imagecreatefromstring.md) | Em caso de sucesso, esta função retorna agora uma instância de GDImage; anteriormente, retornava um resource. |
|  | [imagecreatefromtga](function.imagecreatefromtga.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecreatefromwbmp](function.imagecreatefromwbmp.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecreatefromwebp](function.imagecreatefromwebp.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecreatefromxbm](function.imagecreatefromxbm.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecreatefromxpm](function.imagecreatefromxpm.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecreatetruecolor](function.imagecreatetruecolor.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecrop](function.imagecrop.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecrop](function.imagecrop.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagecropauto](function.imagecropauto.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagecropauto](function.imagecropauto.md) | Em caso de sucesso, esta função agora retorna um objeto GDImage; anteriormente, um resource era retornado. |
|  | [imagedashedline](function.imagedashedline.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagedestroy](function.imagedestroy.md) | Essa função é um NOP agora. |
|  | [imagedestroy](function.imagedestroy.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imageellipse](function.imageellipse.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagefill](function.imagefill.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagefilledarc](function.imagefilledarc.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagefilledellipse](function.imagefilledellipse.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagefilledpolygon](function.imagefilledpolygon.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagefilledrectangle](function.imagefilledrectangle.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagefilltoborder](function.imagefilltoborder.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagefilter](function.imagefilter.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imageflip](function.imageflip.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagefttext](function.imagefttext.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagegammacorrect](function.imagegammacorrect.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagegd](function.imagegd.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagegd2](function.imagegd2.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagegetclip](function.imagegetclip.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagegetinterpolation](function.imagegetinterpolation.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagegif](function.imagegif.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagegrabscreen](function.imagegrabscreen.md) | Em caso de sucesso, esta função retorna agora uma instância de GDImage; anteriormente, um resource era retornado. |
|  | [imagegrabwindow](function.imagegrabwindow.md) | Em caso de sucesso, esta função retorna agora uma instância de GDImage; anteriormente, um resource era retornado. |
|  | [imagegrabwindow](function.imagegrabwindow.md) | client\_area agora espera um valor do tipo bool; anteriormente era esperado um valor do tipo int. |
|  | [imageinterlace](function.imageinterlace.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imageinterlace](function.imageinterlace.md) | enable agora espera um bool; anteriormente esperava um int. |
|  | [imageistruecolor](function.imageistruecolor.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagejpeg](function.imagejpeg.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagelayereffect](function.imagelayereffect.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imageline](function.imageline.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imageopenpolygon](function.imageopenpolygon.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagepalettecopy](function.imagepalettecopy.md) | dst e src agora esperam instâncias GdImage; anteriormente, recursos do tipo resource eram esperados. |
|  | [imagepalettetotruecolor](function.imagepalettetotruecolor.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagepng](function.imagepng.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagepolygon](function.imagepolygon.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagerectangle](function.imagerectangle.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imageresolution](function.imageresolution.md) | resolution\_x e resolution\_y agora podem ser nulos. |
|  | [imagerotate](function.imagerotate.md) | Em caso de sucesso, a função agora retorna uma instância GDImage; anteriormente, um resource era retornado. |
|  | [imagerotate](function.imagerotate.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagerotate](function.imagerotate.md) | O parâmetrop não utilizado ignore\_transparent agora espera um bool; anteriormente era esperado um int. |
|  | [imagesavealpha](function.imagesavealpha.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagescale](function.imagescale.md) | Em caso de sucesso, esta função agora retorna uma instância de GDImage; anteriormente, um resource era retornado. |
|  | [imagescale](function.imagescale.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagesetbrush](function.imagesetbrush.md) | image e brush agora esperam instâncias de GdImage anteriormente, resources eram esperados. |
|  | [imagesetclip](function.imagesetclip.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagesetinterpolation](function.imagesetinterpolation.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagesetpixel](function.imagesetpixel.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagesetthickness](function.imagesetthickness.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagesettile](function.imagesettile.md) | image e tile agora esperam instâncias GdImage; anteriormente, resources eram esperados. |
|  | [imagestring](function.imagestring.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagestringup](function.imagestringup.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagesx](function.imagesx.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagesy](function.imagesy.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagetruecolortopalette](function.imagetruecolortopalette.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagettfbbox](function.imagettfbbox.md) | O parâmetro options foi adicionado. |
|  | [imagettftext](function.imagettftext.md) | O parâmetro options foi adicionado. |
|  | [imagewbmp](function.imagewbmp.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagewbmp](function.imagewbmp.md) | foreground\_color agora pode ser nulo. |
|  | [imagewebp](function.imagewebp.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagexbm](function.imagexbm.md) | O parâmetro image agora espera uma instância de GdImage; anteriormente, um resource gd válido era esperado. |
|  | [imagexbm](function.imagexbm.md) | foreground\_color agora pode ser nulo. |
|  | [imagexbm](function.imagexbm.md) | O quarto parâmetro, que não era usado, foi removido. |
|  | [implode](function.implode.md) | Passar separator depois de array não é mais suportado. |
|  | [inflate\_add](function.inflate-add.md) | context espera uma instância de InflateContext agora; anteriormente, era esperado um resource. |
|  | [inflate\_get\_read\_len](function.inflate-get-read-len.md) | context espera uma instância de InflateContext agora; anteriormente, era esperado um resource. |
|  | [inflate\_get\_status](function.inflate-get-status.md) | context agora espera uma instância de InflateContext; anteriormente, esperava-se um resource. |
|  | [inflate\_init](function.inflate-init.md) | Em caso de sucesso, esta função agora retorna uma instância de InflateContext; anteriormente, um resource era retornado. |
|  | [intval](function.intval.md) | O nível de erro na conversão de objeto mudou de E\_NOTICE para E\_WARNING. |
|  | [is\_numeric](function.is-numeric.md) | String numéricas terminando com espaços ("42 ") agora retornam true. Anteriormente, false era retornado. |
|  | [jdtounix](function.jdtounix.md) | Essa funcão não retorna mais false em caso de falha, mas lança um ValueError. |
|  | [ldap\_add](function.ldap-add.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_add\_ext](function.ldap-add-ext.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_bind\_ext](function.ldap-bind-ext.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_compare](function.ldap-compare.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_control\_paged\_result](function.ldap-control-paged-result.md) | Esta função foi removida. |
|  | [ldap\_control\_paged\_result\_response](function.ldap-control-paged-result-response.md) | Esta função foi removida. |
|  | [ldap\_delete](function.ldap-delete.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_delete\_ext](function.ldap-delete-ext.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_exop\_passwd](function.ldap-exop-passwd.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_first\_attribute](function.ldap-first-attribute.md) | O terceito parâmetro não utilizado, ber\_identifier, não é mais aceito. |
|  | [ldap\_list](function.ldap-list.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_mod\_add](function.ldap-mod-add.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_mod\_del](function.ldap-mod-del.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_mod\_replace](function.ldap-mod-replace.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_modify\_batch](function.ldap-modify-batch.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_mod\_add\_ext](function.ldap-mod_add-ext.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_mod\_del\_ext](function.ldap-mod_del-ext.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_mod\_replace\_ext](function.ldap-mod_replace-ext.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_next\_attribute](function.ldap-next-attribute.md) | O parâmetro não utilizado ber\_identifier não é mais aceito. |
|  | [ldap\_read](function.ldap-read.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_rename](function.ldap-rename.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_rename\_ext](function.ldap-rename-ext.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_sasl\_bind](function.ldap-sasl-bind.md) | dn, password, mech, realm, authc\_id, authz\_id e props agora podem ser nulos. |
|  | [ldap\_search](function.ldap-search.md) | O parâmetro controls agora pode ser nulo; anteriormente, o padrão era []. |
|  | [ldap\_set\_rebind\_proc](function.ldap-set-rebind-proc.md) | callback agora pode ser nulo. |
|  | [ldap\_sort](function.ldap-sort.md) | Esta função foi removida. |
|  | [levenshtein](function.levenshtein.md) | Antes desta versão, levenshtein tinha de ser chamada com dois ou com cinco argumentos. |
|  | [levenshtein](function.levenshtein.md) | Antes desta versão, levenshtein retornaria -1 se uma das strings fosse maior que 255 caracteres. |
|  | [libxml\_disable\_entity\_loader](function.libxml-disable-entity-loader.md) | Esta função foi descontinuada. |
|  | [libxml\_use\_internal\_errors](function.libxml-use-internal-errors.md) | O parâmetro use\_errors agora pode ser nulo. Anteriormente, o padrão era false. |
|  | [localtime](function.localtime.md) | timestamp agora pode ser nulo. |
|  | [max](function.max.md) | max lança um ValueError em caso de erros. Anteriormente, retornava false e emitia um alerta E\_WARNING. |
|  | [max](function.max.md) | Como as comparações de strings com números foram alteradas, max não mais retorna um valor diferente por conta da ordem dos argumentos informados. |
|  | [mb\_check\_encoding](function.mb-check-encoding.md) | value e encoding são anuláveis agora. |
|  | [mb\_chr](function.mb-chr.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_convert\_encoding](function.mb-convert-encoding.md) | mb\_convert\_encoding agora lançará um ValueError quando to\_encoding receber uma codificação inválida. |
|  | [mb\_convert\_encoding](function.mb-convert-encoding.md) | mb\_convert\_encoding agora lançará um ValueError quando from\_encoding receber uma codificação inválida. |
|  | [mb\_convert\_encoding](function.mb-convert-encoding.md) | from\_encoding agora é anulável. |
|  | [mb\_convert\_kana](function.mb-convert-kana.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_decode\_numericentity](function.mb-decode-numericentity.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_detect\_order](function.mb-detect-order.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_encode\_mimeheader](function.mb-encode-mimeheader.md) | charset e transfer\_encoding agora são anuláveis. |
|  | [mb\_encode\_numericentity](function.mb-encode-numericentity.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_encoding\_aliases](function.mb-encoding-aliases.md) | Se o encoding for desconhecido, agora é lançado um ValueError; anteriormente, um E\_WARNING era emitido, e a função retornava false. |
|  | [mb\_ereg](function.mb-ereg.md) | Esta função agora retorna true em caso de sucesso. Anteriormente, ela retornava o comprimento em bytes da string correspondida se uma correspondência para pattern fosse encontrada em string e matches fosse passado. Se o parâmetro opcional matches não fosse passado ou o comprimento da string correspondida fosse 0, esta função retornava 1. |
|  | [mb\_ereg\_match](function.mb-ereg-match.md) | options é anulável agora. |
|  | [mb\_ereg\_replace](function.mb-ereg-replace.md) | options é anulável agora. |
|  | [mb\_ereg\_replace\_callback](function.mb-ereg-replace-callback.md) | options é anulável agora. |
|  | [mb\_ereg\_search](function.mb-ereg-search.md) | pattern e options agora são anuláveis. |
|  | [mb\_ereg\_search\_init](function.mb-ereg-search-init.md) | pattern e options são anuláveis agora. |
|  | [mb\_ereg\_search\_pos](function.mb-ereg-search-pos.md) | pattern e options são anuláveis agora. |
|  | [mb\_ereg\_search\_regs](function.mb-ereg-search-regs.md) | pattern e options agora são anuláveis. |
|  | [mb\_eregi](function.mb-eregi.md) | Esta função agora retorna true em caso de sucesso. Anteriormente, ela retornava o comprimento em bytes da string correspondida se uma correspondência para pattern fosse encontrada em string e matches fosse passado. Se o parâmetro opcional matches não fosse passado ou o comprimento da string correspondida fosse 0, esta função retornava 1. |
|  | [mb\_eregi\_replace](function.mb-eregi-replace.md) | options é anulável agora. |
|  | [mb\_get\_info](function.mb-get-info.md) | Os types "func\_overload" e "func\_overload\_list" não são mais suportados. |
|  | [mb\_http\_input](function.mb-http-input.md) | mb\_http\_input agora lança uma exceção ValueError se type for inválido. type agora é anulável. |
|  | [mb\_http\_output](function.mb-http-output.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_internal\_encoding](function.mb-internal-encoding.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_internal\_encoding](function.mb-internal-encoding.md) | Agora lança um ValueError se encoding for uma codificação inválida. Anteriormente, um E\_WARNING era emitido. |
|  | [mb\_language](function.mb-language.md) | language é anulável agora. |
|  | [mb\_ord](function.mb-ord.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_parse\_str](function.mb-parse-str.md) | O segundo parâmetro não é mais opcional. |
|  | [mb\_regex\_encoding](function.mb-regex-encoding.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_regex\_set\_options](function.mb-regex-set-options.md) | Se o parâmetro options for fornecido e não for null, as opções anteriores são retornadas. Anteriormente, as opções atuais eram retornadas. |
|  | [mb\_regex\_set\_options](function.mb-regex-set-options.md) | options é anulável agora. |
|  | [mb\_regex\_set\_options](function.mb-regex-set-options.md) | A opção "e" agora lança um ValueError. |
|  | [mb\_scrub](function.mb-scrub.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_send\_mail](function.mb-send-mail.md) | additional\_params é anulável agora. |
|  | [mb\_str\_split](function.mb-str-split.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_str\_split](function.mb-str-split.md) | Esta função não retorna mais false em caso de falha. |
|  | [mb\_strcut](function.mb-strcut.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strimwidth](function.mb-strimwidth.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_stripos](function.mb-stripos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [mb\_stripos](function.mb-stripos.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_stristr](function.mb-stristr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [mb\_stristr](function.mb-stristr.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strlen](function.mb-strlen.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strpos](function.mb-strpos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [mb\_strpos](function.mb-strpos.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strrchr](function.mb-strrchr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [mb\_strrchr](function.mb-strrchr.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strrichr](function.mb-strrichr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [mb\_strrichr](function.mb-strrichr.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strripos](function.mb-strripos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [mb\_strripos](function.mb-strripos.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strrpos](function.mb-strrpos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [mb\_strrpos](function.mb-strrpos.md) | O envio de encoding como terceiro argumento em vez de offset foi removido. |
|  | [mb\_strrpos](function.mb-strrpos.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strstr](function.mb-strstr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [mb\_strstr](function.mb-strstr.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_strwidth](function.mb-strwidth.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_substitute\_character](function.mb-substitute-character.md) | Passar uma string vazia para substitute\_character não é mais suportado; deve-se passar "none" em vez disso. |
|  | [mb\_substitute\_character](function.mb-substitute-character.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_substr](function.mb-substr.md) | O parâmetro encoding agora pode ser nulo. |
|  | [mb\_substr\_count](function.mb-substr-count.md) | O parâmetro encoding agora pode ser nulo. |
|  | [metaphone](function.metaphone.md) | Esta função retornava false em caso de falha. |
|  | [mhash](function.mhash.md) | key agora pode ser nulo. |
|  | [min](function.min.md) | min lança um ValueError em caso de falhas; anteriormente retornava false e emitia um alerta E\_WARNING. |
|  | [min](function.min.md) | Como as comparações de número e string foram alteradas, min não mais retorna um valor diferente por conta da ordem dos argumentos informados. |
|  | [mktime](function.mktime.md) | O parâmetro hour não é mais opcional. Se for necessário um timestamp Unix, use a função time. |
|  | [mktime](function.mktime.md) | minute, second, month, day e year agora podem ser nulos. |
|  | [money\_format](function.money-format.md) | Esta função foi removida. |
|  | [msg\_get\_queue](function.msg-get-queue.md) | Em caso de sucesso, esta função retorna uma instância de SysvMessageQueue; anteriormente, um resource era retornado. |
|  | [msg\_receive](function.msg-receive.md) | queue espera uma instância de SysvMessageQueue agora; anteriormente, um resource era esperado. |
|  | [msg\_remove\_queue](function.msg-remove-queue.md) | queue espera uma instância de SysvMessageQueue agora; anteriormente, um resource era esperado. |
|  | [msg\_send](function.msg-send.md) | queue espera uma instância de SysvMessageQueue agora; anteriormente, um resource era esperado. |
|  | [msg\_set\_queue](function.msg-set-queue.md) | queue espera uma instância de SysvMessageQueue agora; anteriormente, um resource era esperado. |
|  | [msg\_stat\_queue](function.msg-stat-queue.md) | queue espera uma instância de SysvMessageQueue agora; anteriormente, um resource era esperado. |
|  | [mt\_rand](function.mt-rand.md) | Uma exceção ValueError será lançada se max for menor que min; anteriormente, um E\_WARNING era emitido e a função retornava false. |
|  | [number\_format](function.number-format.md) | Antes desta versão, number\_format aceitava um, dois ou quatro parâmetros (mas não três). |
|  | [ob\_implicit\_flush](function.ob-implicit-flush.md) | O parâmetro enable agora espera um valor do tipo bool; anteriormente, um int era esperado. |
|  | [odbc\_columns](function.odbc-columns.md) | schema, table e column agora podem ser nulos. |
|  | [odbc\_error](function.odbc-error.md) | odbc agora pode ser nulo. |
|  | [odbc\_errormsg](function.odbc-errormsg.md) | odbc agora pode ser nulo. |
|  | [odbc\_exec](function.odbc-exec.md) | O parâmetro flags foi removido. |
|  | [odbc\_execute](function.odbc-execute.md) | O parâmetro não utilizado flags foi removido. |
|  | [odbc\_fetch\_row](function.odbc-fetch-row.md) | row agora pode ser nulo. |
|  | [odbc\_procedurecolumns](function.odbc-procedurecolumns.md) | Antes desta versão, a função só podia ser chamada com um ou cinco argumentos. |
|  | [odbc\_procedures](function.odbc-procedures.md) | Antes desta versão, a função só podia ser chamada com um ou quatro argumentos. |
|  | [odbc\_tables](function.odbc-tables.md) | schema, table e types agora podem ser nulos. |
|  | [opendir](function.opendir.md) | context agora pode ser nulo. |
|  | [openssl\_csr\_export](function.openssl-csr-export.md) | csr aceita agora uma instância de OpenSSLCertificateSigningRequest; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_csr\_export\_to\_file](function.openssl-csr-export-to-file.md) | csr aceita agora uma instância de OpenSSLCertificateSigningRequest; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_csr\_get\_public\_key](function.openssl-csr-get-public-key.md) | Em caso de sucesso, esta função retorna uma instância OpenSSLAsymmetricKey agora; anteriormente, retornava um resource do tipo OpenSSL key. |
|  | [openssl\_csr\_get\_public\_key](function.openssl-csr-get-public-key.md) | csr aceita uma instância OpenSSLCertificateSigningRequest agora; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_csr\_get\_subject](function.openssl-csr-get-subject.md) | csr aceita uma instância OpenSSLCertificateSigningRequest agora; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_csr\_new](function.openssl-csr-new.md) | Em caso de sucesso, esta função agora retorna uma instância de OpenSSLCertificateSigningRequest; anteriormente, retornava um resource do tipo OpenSSL X.509 CSR. |
|  | [openssl\_csr\_new](function.openssl-csr-new.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey; anteriormente, aceitava um resource do tipo OpenSSL key. |
|  | [openssl\_csr\_sign](function.openssl-csr-sign.md) | Em caso de sucesso, esta função agora retorna uma instância de OpenSSLCertificate; anteriormente, retornava um resource do tipo OpenSSL X.509. |
|  | [openssl\_csr\_sign](function.openssl-csr-sign.md) | csr aceita uma instância OpenSSLCertificateSigningRequest agora; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_csr\_sign](function.openssl-csr-sign.md) | ca\_certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_csr\_sign](function.openssl-csr-sign.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_dh\_compute\_key](function.openssl-dh-compute-key.md) | private\_key agora aceita um OpenSSLAsymmetricKey; anteriormente, um resource do tipo OpenSSL key era aceito. |
|  | [openssl\_free\_key](function.openssl-free-key.md) | Esta função foi descontinuada e não tem mais nenhum efeito. |
|  | [openssl\_free\_key](function.openssl-free-key.md) | key agora aceita um OpenSSLAsymmetricKey; anteriormente, um resource do tipo OpenSSL key era aceito. |
|  | [openssl\_open](function.openssl-open.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 CSR era aceito. |
|  | [openssl\_open](function.openssl-open.md) | cipher\_algo não é mais um parâmetro opcional. |
|  | [openssl\_pkcs7\_decrypt](function.openssl-pkcs7-decrypt.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 CSR era aceito. |
|  | [openssl\_pkcs7\_encrypt](function.openssl-pkcs7-encrypt.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_pkcs7\_sign](function.openssl-pkcs7-sign.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_pkcs7\_sign](function.openssl-pkcs7-sign.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 CSR era aceito. |
|  | [openssl\_pkcs7\_verify](function.openssl-pkcs7-verify.md) | signers\_certificates\_filename, untrusted\_certificates\_filename, content e output\_filename agora podem ser nulos. |
|  | [openssl\_pkcs12\_export](function.openssl-pkcs12-export.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_pkcs12\_export](function.openssl-pkcs12-export.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_pkcs12\_export\_to\_file](function.openssl-pkcs12-export-to-file.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 CSR era aceito. |
|  | [openssl\_pkcs12\_export\_to\_file](function.openssl-pkcs12-export-to-file.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_pkey\_export](function.openssl-pkey-export.md) | key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_pkey\_export\_to\_file](function.openssl-pkey-export-to-file.md) | key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_pkey\_free](function.openssl-pkey-free.md) | Esta função agora está descontinuada e não tem mais efeito. |
|  | [openssl\_pkey\_free](function.openssl-pkey-free.md) | key agora aceita uma instância de OpenSSLAsymmetricKey; anteriormente, um resource do tipo OpenSSL key era aceito. |
|  | [openssl\_pkey\_get\_details](function.openssl-pkey-get-details.md) | key agora aceita uma instância de OpenSSLAsymmetricKey; anteriormente, um resource do tipo OpenSSL key era aceito. |
|  | [openssl\_pkey\_get\_private](function.openssl-pkey-get-private.md) | Em caso de sucesso, esta função retorna uma instância OpenSSLAsymmetricKey agora; anteriormente, retornava um resource do tipo OpenSSL key. |
|  | [openssl\_pkey\_get\_private](function.openssl-pkey-get-private.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_pkey\_get\_private](function.openssl-pkey-get-private.md) | passphrase agora pode ser nulo. |
|  | [openssl\_pkey\_get\_public](function.openssl-pkey-get-public.md) | Em caso de sucesso, esta função retorna uma instância OpenSSLAsymmetricKey agora; anteriormente, retornava um resource do tipo OpenSSL key. |
|  | [openssl\_pkey\_get\_public](function.openssl-pkey-get-public.md) | public\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_pkey\_new](function.openssl-pkey-new.md) | Em caso de sucesso, esta função retorna uma instância OpenSSLAsymmetricKey agora; anteriormente, retornava um resource do tipo OpenSSL key. |
|  | [openssl\_private\_decrypt](function.openssl-private-decrypt.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_private\_encrypt](function.openssl-private-encrypt.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_public\_decrypt](function.openssl-public-decrypt.md) | public\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_public\_encrypt](function.openssl-public-encrypt.md) | public\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_random\_pseudo\_bytes](function.openssl-random-pseudo-bytes.md) | strong\_result agora pode ser nulo. |
|  | [openssl\_seal](function.openssl-seal.md) | public\_key agora aceita um array de instâncias de OpenSSLAsymmetricKey; anteriormente, um array de resources do tipo OpenSSL key era aceito. |
|  | [openssl\_seal](function.openssl-seal.md) | cipher\_algo não é mais um parâmetro opcional. |
|  | [openssl\_seal](function.openssl-seal.md) | iv agora pode ser nulo. |
|  | [openssl\_sign](function.openssl-sign.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_spki\_new](function.openssl-spki-new.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey; anteriormente, um resource do tipo OpenSSL key era aceito. |
|  | [openssl\_verify](function.openssl-verify.md) | public\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_check\_private\_key](function.openssl-x509-check-private-key.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_check\_private\_key](function.openssl-x509-check-private-key.md) | private\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_checkpurpose](function.openssl-x509-checkpurpose.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_checkpurpose](function.openssl-x509-checkpurpose.md) | untrusted\_certificates\_file agora pode ser nulo. |
|  | [openssl\_x509\_export](function.openssl-x509-export.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_export\_to\_file](function.openssl-x509-export-to-file.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_fingerprint](function.openssl-x509-fingerprint.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_free](function.openssl-x509-free.md) | Esta função agora está descontinuada e não tem mais efeito. |
|  | [openssl\_x509\_free](function.openssl-x509-free.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_parse](function.openssl-x509-parse.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_read](function.openssl-x509-read.md) | Em caso de sucesso, esta função agora retorna uma instância de OpenSSLCertificate; anteriormente, retornava um resource do tipo OpenSSL X.509. |
|  | [openssl\_x509\_read](function.openssl-x509-read.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_verify](function.openssl-x509-verify.md) | certificate agora aceita uma instância de OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL X.509 era aceito. |
|  | [openssl\_x509\_verify](function.openssl-x509-verify.md) | public\_key agora aceita uma instância de OpenSSLAsymmetricKey ou OpenSSLCertificate; anteriormente, um resource do tipo OpenSSL key ou OpenSSL X.509 era aceito. |
|  | [pack](function.pack.md) | Esta função não mais retorna false em caso de falha. |
|  | [parse\_str](function.parse-str.md) | result não é mais opcional. |
|  | [parse\_url](function.parse-url.md) | parse\_url agora diferencia consultas e fragmentos vazios de ausentes. |
|  | [passthru](function.passthru.md) | Se command estiver vazio ou contiver bytes nulos, passthru agora lança uma exceção ValueError. Anteriormente, emitia um E\_WARNING e retornava false. |
|  | [password\_hash](function.password-hash.md) | password\_hash não mais retorna false em caso de falha, em vez disso uma exceção ValueError será lançada se o algoritmo de hash da senha não for válido, ou uma exceção Error se o cálculo do hash falhou por motivo desconhecido. |
|  | [password\_hash](function.password-hash.md) | O parâmetros algo agora pode ser nulo. |
|  | [pcntl\_async\_signals](function.pcntl-async-signals.md) | enable agora é anulável. |
|  | [pcntl\_getpriority](function.pcntl-getpriority.md) | process\_id agora pode ser nulo. |
|  | [pcntl\_setpriority](function.pcntl-setpriority.md) | process\_id agora é anulável. |
|  | [pfsockopen](function.pfsockopen.md) | timeout agora pode ser nulo. |
|  | [pg\_client\_encoding](function.pg-client-encoding.md) | connection agora é anulável. |
|  | [pg\_close](function.pg-close.md) | connection agora é anulável. |
|  | [pg\_dbname](function.pg-dbname.md) | connection agora é anulável. |
|  | [pg\_end\_copy](function.pg-end-copy.md) | connection agora é anulável. |
|  | [pg\_fetch\_all](function.pg-fetch-all.md) | pg\_fetch\_all agora retornará um array em vez de false para conjuntos de resultados com zero linhas. |
|  | [pg\_host](function.pg-host.md) | connection agora é anulável. |
|  | [pg\_last\_error](function.pg-last-error.md) | connection agora é anulável. |
|  | [pg\_lo\_write](function.pg-lo-write.md) | length agora é anulável. |
|  | [pg\_options](function.pg-options.md) | connection agora é anulável. |
|  | [pg\_ping](function.pg-ping.md) | connection é anulável agora. |
|  | [pg\_port](function.pg-port.md) | connection agora é anulável. |
|  | [pg\_trace](function.pg-trace.md) | connection agora é anulável. |
|  | [pg\_tty](function.pg-tty.md) | connection agora é anulável. |
|  | [pg\_untrace](function.pg-untrace.md) | connection agora é anulável. |
|  | [pg\_version](function.pg-version.md) | connection agora é anulável. |
|  | [phpversion](function.phpversion.md) | extension agora pode ser nulo. |
|  | [printf](function.printf.md) | Esta função não retorna mais false em caso de falha. |
|  | [printf](function.printf.md) | Lança um erro ValueError se o número de argumentos for zero; anteriormente, esta função emitia um E\_WARNING. |
|  | [printf](function.printf.md) | Lança um erro ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [printf](function.printf.md) | Lança um erro ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [printf](function.printf.md) | Lança um erro ArgumentCountError quando menos argumentos do que o necessário são fornecidos; anteriormente, esta função emitia um E\_WARNING. |
|  | [readdir](function.readdir.md) | dir\_handle agora pode ser nulo. |
|  | [readline\_info](function.readline-info.md) | var\_name e value agora são anuláveis. |
|  | [readline\_read\_history](function.readline-read-history.md) | filename é anulável agora. |
|  | [readline\_write\_history](function.readline-write-history.md) | filename é anulável agora. |
|  | [restore\_include\_path](function.restore-include-path.md) | Esta função foi removida. |
|  | [rewinddir](function.rewinddir.md) | dir\_handle agora pode ser nulo. |
|  | [round](function.round.md) | num não mais aceita objetos internos que suportam conversões numéricas. |
|  | [sapi\_windows\_vt100\_support](function.sapi-windows-vt100-support.md) | enable agora pode ser nulo. |
|  | [scandir](function.scandir.md) | context agora pode ser nulo. |
|  | [sem\_acquire](function.sem-acquire.md) | semaphore agora espera uma instância de SysvSemaphore; anteriormente, um resource era esperado. |
|  | [sem\_get](function.sem-get.md) | Em caso de sucesso, esta função agora retorna uma instância de SysvSemaphore; anteriormente, um resource era retornado. |
|  | [sem\_get](function.sem-get.md) | O tipo de auto\_release foi alterado de int para bool. |
|  | [sem\_release](function.sem-release.md) | semaphore agora espera uma instância de SysvSemaphore; anteriormente, um resource era esperado. |
|  | [sem\_remove](function.sem-remove.md) | semaphore agora espera uma instância de SysvSemaphore; anteriormente, um resource era esperado. |
|  | [session\_cache\_expire](function.session-cache-expire.md) | value é anulável agora. |
|  | [session\_cache\_limiter](function.session-cache-limiter.md) | value agora pode ser nulo. |
|  | [session\_id](function.session-id.md) | id é anulável agora. |
|  | [session\_module\_name](function.session-module-name.md) | module é anulável agora. |
|  | [session\_name](function.session-name.md) | name é anulável agora. |
|  | [session\_save\_path](function.session-save-path.md) | path agora pode ser nulo. |
|  | [session\_set\_cookie\_params](function.session-set-cookie-params.md) | path, domain, secure e httponly são anuláveis agora. |
|  | [set\_error\_handler](function.set-error-handler.md) | errcontext foi removido e não mais será passado para chamadas de retorno de usuário. |
|  | [setcookie](function.setcookie.md) | Passar chaves não suportadas agora lança um ValueError em vez de emitir um E\_WARNING. |
|  | [settype](function.settype.md) | Agora lança um ValueError quando um tipo inválido é passado ao parâmetro type. Anteriormente, um E\_WARNING era emitido e a função retornava false. |
|  | [shm\_attach](function.shm-attach.md) | Em caso de sucesso, esta função retorna uma instância de SysvSharedMemory; anteriormente, um resource era retornado. |
|  | [shm\_attach](function.shm-attach.md) | size agora é anulável. |
|  | [shm\_detach](function.shm-detach.md) | shm espera uma instância de SysvSharedMemory agora; anteriormente, um resource era esperado. |
|  | [shm\_get\_var](function.shm-get-var.md) | shm espera uma instância de SysvSharedMemory agora; anteriormente, um resource era esperado. |
|  | [shm\_has\_var](function.shm-has-var.md) | shm espera uma instância de SysvSharedMemory agora; anteriormente, um resource era esperado. |
|  | [shm\_put\_var](function.shm-put-var.md) | shm espera uma instância de SysvSharedMemory agora; anteriormente, um resource era esperado. |
|  | [shm\_remove](function.shm-remove.md) | shm espera uma instância de SysvSharedMemory agora; anteriormente, um resource era esperado. |
|  | [shm\_remove\_var](function.shm-remove-var.md) | shm espera uma instância de SysvSharedMemory agora; anteriormente, um resource era esperado. |
|  | [shmop\_close](function.shmop-close.md) | Esta função foi descontinuada, pois não tem mais efeito. |
|  | [shmop\_close](function.shmop-close.md) | shmop agora espera uma instância de Shmop; anteriormente um resource era esperado. |
|  | [shmop\_delete](function.shmop-delete.md) | shmop agora espera uma instância de Shmop; anteriormente um resource era esperado. |
|  | [shmop\_open](function.shmop-open.md) | Em caso de sucesso, esta função agora retorna uma instância de Shmop; anteriormente, retornava um resource. |
|  | [shmop\_open](function.shmop-open.md) | Se mode for inválido ou size for menor ou igual a zero, um ValueError é lançado; anteriormente, era emitido um E\_WARNING e a função retornava false. |
|  | [shmop\_read](function.shmop-read.md) | shmop agora espera uma instância de Shmop; anteriormente, esperava um resource. |
|  | [shmop\_read](function.shmop-read.md) | Se offset ou size estiverem fora do intervalo, um ValueError é lançado; anteriormente, um E\_WARNING era emitido e false era retornado. |
|  | [shmop\_size](function.shmop-size.md) | shmop agora espera uma instância de Shmop; anteriormente um resource era esperado. |
|  | [shmop\_write](function.shmop-write.md) | Antes do PHP 8.0.0, false era retornado em caso de falha. |
|  | [shmop\_write](function.shmop-write.md) | shmop agora espera uma instância de Shmop; anteriormente, esperava um resource. |
|  | [sleep](function.sleep.md) | A função lança um ValueError para valores negativos de seconds; anteriormente, um E\_WARNING era emitido, e a função retornava false. |
|  | [socket\_accept](function.socket-accept.md) | Em caso de sucesso, esta função agora retorna uma instância de Socket; anteriormente um resource era retornado. |
|  | [socket\_addrinfo\_bind](function.socket-addrinfo-bind.md) | Em caso de sucesso, esta função agora retorna uma instância de Socket; anteriormente, retornava um resource. |
|  | [socket\_addrinfo\_bind](function.socket-addrinfo-bind.md) | O parâmetro address agora espera uma instância de AddressInfo; anteriormente, um resource era esperado. |
|  | [socket\_addrinfo\_connect](function.socket-addrinfo-connect.md) | Em caso de sucesso, esta função agora retorna uma instância de Socket; anteriormente, retornava um resource. |
|  | [socket\_addrinfo\_connect](function.socket-addrinfo-connect.md) | O parâmetro address agora espera uma instância de AddressInfo; anteriormente, um resource era esperado. |
|  | [socket\_addrinfo\_explain](function.socket-addrinfo-explain.md) | O parâmetro address agora espera uma instância de AddressInfo; anteriormente, um resource era esperado. |
|  | [socket\_addrinfo\_lookup](function.socket-addrinfo-lookup.md) | Em caso de sucesso, esta função agora retorna um array de instâncias de AddressInfo; anteriormente, retornava um array de resources. |
|  | [socket\_addrinfo\_lookup](function.socket-addrinfo-lookup.md) | service agora pode ser nulo. |
|  | [socket\_bind](function.socket-bind.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_clear\_error](function.socket-clear-error.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_clear\_error](function.socket-clear-error.md) | socket agora pode ser nulo. |
|  | [socket\_close](function.socket-close.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_connect](function.socket-connect.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_connect](function.socket-connect.md) | port agora pode ser nulo. |
|  | [socket\_create](function.socket-create.md) | Em caso de sucesso, esta função agora retorna uma instância de Socket; anteriormente, retornava um resource. |
|  | [socket\_create\_listen](function.socket-create-listen.md) | Em caso de sucesso, esta função agora retorna uma instância de Socket; anteriormente, retornava um resource. |
|  | [socket\_create\_pair](function.socket-create-pair.md) | pair é agora uma referência a um array de instâncias Socket; anteriormente, era uma referência a um array de resources. |
|  | [socket\_export\_stream](function.socket-export-stream.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_get\_option](function.socket-get-option.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_getpeername](function.socket-getpeername.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_getsockname](function.socket-getsockname.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_import\_stream](function.socket-import-stream.md) | Em caso de sucesso, esta função agora retorna uma instância de Socket; anteriormente, retornava um resource. |
|  | [socket\_last\_error](function.socket-last-error.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_last\_error](function.socket-last-error.md) | socket agora pode ser nulo. |
|  | [socket\_listen](function.socket-listen.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_read](function.socket-read.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_recv](function.socket-recv.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_recvfrom](function.socket-recvfrom.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_recvmsg](function.socket-recvmsg.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_send](function.socket-send.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_sendmsg](function.socket-sendmsg.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_sendto](function.socket-sendto.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_sendto](function.socket-sendto.md) | port agora pode ser nulo. |
|  | [socket\_set\_block](function.socket-set-block.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_set\_nonblock](function.socket-set-nonblock.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_set\_option](function.socket-set-option.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_shutdown](function.socket-shutdown.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_write](function.socket-write.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_write](function.socket-write.md) | length agora pode ser nulo. |
|  | [socket\_wsaprotocol\_info\_export](function.socket-wsaprotocol-info-export.md) | O parâmetro socket agora espera uma instância de Socket; anteriormente, um resource era esperado. |
|  | [socket\_wsaprotocol\_info\_import](function.socket-wsaprotocol-info-import.md) | Em caso de sucesso, esta função agora retorna uma instância de Socket; anteriormente, retornava um resource. |
|  | [soundex](function.soundex.md) | Antes desta versão, chamar a função com uma string vazia retornava false por nenhuma razão em particular. |
|  | [spl\_autoload](function.spl-autoload.md) | file\_extensions é anulável agora. |
|  | [spl\_autoload\_extensions](function.spl-autoload-extensions.md) | file\_extensions é anulável agora. |
|  | [spl\_autoload\_functions](function.spl-autoload-functions.md) | O valor de retorno foi atualizado para sempre ser um array; anteriormente, esta função retornava false se a fila de autoload não estivesse ativada. |
|  | [spl\_autoload\_register](function.spl-autoload-register.md) | callback é anulável agora. |
|  | [sprintf](function.sprintf.md) | Esta função não retorna mais false em caso de falha. |
|  | [sprintf](function.sprintf.md) | Lança um erro ValueError se o número de argumentos for zero; anteriormente, esta função emitia um E\_WARNING. |
|  | [sprintf](function.sprintf.md) | Lança um erro ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [sprintf](function.sprintf.md) | Lança um erro ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [sprintf](function.sprintf.md) | Lança um erro ArgumentCountError quando menos argumentos do que o necessário são fornecidos; anteriormente, esta função emitia um E\_WARNING. |
|  | [str\_split](function.str-split.md) | Se length for menor que 1, uma exceção ValueError será lançada agora; anteriormente, um erro de nível E\_WARNING era gerado e a função retornava false. |
|  | [str\_word\_count](function.str-word-count.md) | characters agora pode ser nulo. |
|  | [strcspn](function.strcspn.md) | length agora pode ser nulo. |
|  | [stream\_context\_create](function.stream-context-create.md) | options e params agora podem ser nulos. |
|  | [stream\_context\_get\_default](function.stream-context-get-default.md) | options agora pode ser nulo. |
|  | [stream\_copy\_to\_stream](function.stream-copy-to-stream.md) | length agora pode ser nulo. |
|  | [stream\_get\_contents](function.stream-get-contents.md) | length agora pode ser nulo. |
|  | [stream\_set\_chunk\_size](function.stream-set-chunk-size.md) | Uma exceção ValueError agora é disparada se size for menor que 1 ou maior que PHP\_INT\_MAX. Anteriormente, um aviso E\_WARNING era emitido e false era retornado. |
|  | [stream\_socket\_accept](function.stream-socket-accept.md) | timeout agora pode ser nulo. |
|  | [stream\_socket\_client](function.stream-socket-client.md) | timeout e context agora podem ser nulos. |
|  | [stream\_socket\_enable\_crypto](function.stream-socket-enable-crypto.md) | session\_stream agora pode ser nulo. |
|  | [stream\_socket\_server](function.stream-socket-server.md) | context agora pode ser nulo. |
|  | [strftime](function.strftime.md) | timestamp agora pode ser nulo. |
|  | [strip\_tags](function.strip-tags.md) | allowed\_tags agora pode ser nulo. |
|  | [stripos](function.stripos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [stripos](function.stripos.md) | Passar um int em needle não é mais suportado. |
|  | [stristr](function.stristr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [stristr](function.stristr.md) | Passar um int em needle não é mais suportado. |
|  | [strpos](function.strpos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strpos](function.strpos.md) | Passar um int em needle não é mais suportado. |
|  | [strrchr](function.strrchr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strrchr](function.strrchr.md) | Passar um int em needle não é mais suportado. |
|  | [strripos](function.strripos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strripos](function.strripos.md) | Passar int no parâmetro needle não é mais suportado. |
|  | [strrpos](function.strrpos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strrpos](function.strrpos.md) | Passar int no parâmetro needle não é mais suportado. |
|  | [strspn](function.strspn.md) | length agora pode ser nulo. |
|  | [strstr](function.strstr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strstr](function.strstr.md) | Passar um int em needle não é mais suportado. |
|  | [strtotime](function.strtotime.md) | baseTimestamp agora pode ser nulo. |
|  | [substr](function.substr.md) | length agora pode ser nulo. Quando length for especificamente definido para null, a função retorna uma substring terminando no final da string, quando anteriormente retornava uma string vazia. |
|  | [substr](function.substr.md) | A função retorna uma string vazia quando antes retornava false. |
|  | [substr\_compare](function.substr-compare.md) | length agora pode ser nulo. |
|  | [substr\_count](function.substr-count.md) | length agora pode ser nulo. |
|  | [substr\_replace](function.substr-replace.md) | length agora pode ser nulo. |
|  | [touch](function.touch.md) | mtime e atime agora podem ser nulos. |
|  | [trigger\_error](function.trigger-error.md) | A função agora lança uma exceção ValueError se um error\_level inválido for especificado. Anteriormente, retornava false. |
|  | [uasort](function.uasort.md) | Se a função callback espera que um parâmetro seja passado por referência, esta função agora emitirá um E\_WARNING. |
|  | [uksort](function.uksort.md) | Se a função callback espera que um parâmetro seja passado por referência, esta função agora emitirá um E\_WARNING. |
|  | [umask](function.umask.md) | mask agora pode ser nulo. |
|  | [unixtojd](function.unixtojd.md) | timestamp agora pode ser nulo. |
|  | [usort](function.usort.md) | Se a função callback espera que um parâmetro seja passado por referência, esta função agora emitirá um E\_WARNING. |
|  | [vfprintf](function.vfprintf.md) | Esta função não mais retorna false em caso de falha. |
|  | [vfprintf](function.vfprintf.md) | Lança uma exceção ValueError se o número de argumentos for zero; anteriormente esta função emitia um E\_WARNING. |
|  | [vfprintf](function.vfprintf.md) | Lança uma exceção ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vfprintf](function.vfprintf.md) | Lança uma exceção ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vfprintf](function.vfprintf.md) | Lança uma exceção ValueError quando houver menos parâmetros que os necessários; anteriormente esta função emitia um E\_WARNING. |
|  | [vprintf](function.vprintf.md) | Esta função não mais retorna false em caso de falha. |
|  | [vprintf](function.vprintf.md) | Lança uma exceção ValueError se o número de argumentos for zero; anteriormente esta função emitia um E\_WARNING. |
|  | [vprintf](function.vprintf.md) | Lança uma exceção ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vprintf](function.vprintf.md) | Lança uma exceção ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vprintf](function.vprintf.md) | Lança uma exceção ValueError quando houver menos parâmetros que os necessários; anteriormente esta função emitia um E\_WARNING. |
|  | [vsprintf](function.vsprintf.md) | Esta função não mais retorna false em caso de falha. |
|  | [vsprintf](function.vsprintf.md) | Lança uma exceção ValueError se o número de argumentos for zero; anteriormente esta função emitia um E\_WARNING. |
|  | [vsprintf](function.vsprintf.md) | Lança uma exceção ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vsprintf](function.vsprintf.md) | Lança uma exceção ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vsprintf](function.vsprintf.md) | Lança uma exceção ValueError quando houver menos parâmetros que os necessários; anteriormente esta função emitia um E\_WARNING. |
|  | [wordwrap](function.wordwrap.md) | Se break for uma string vazia, uma exceção ValueError é lançada; anteriormente, neste caso, um E\_WARNING era emitido e a função retornava false. |
|  | [xml\_get\_current\_byte\_index](function.xml-get-current-byte-index.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_get\_current\_column\_number](function.xml-get-current-column-number.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_get\_current\_line\_number](function.xml-get-current-line-number.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_get\_error\_code](function.xml-get-error-code.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_parse](function.xml-parse.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_parse\_into\_struct](function.xml-parse-into-struct.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_parser\_create](function.xml-parser-create.md) | Esta função retorna uma instância de XMLParser agora; anteriormente, um recurso do tipo resource era retornado, ou false em caso de falha. |
|  | [xml\_parser\_create](function.xml-parser-create.md) | encoding agora pode ser nulo. |
|  | [xml\_parser\_create\_ns](function.xml-parser-create-ns.md) | Esta função retorna uma instância de XMLParser agora; anteriormente, um recurso do tipo resource era retornado, ou false em caso de falha. |
|  | [xml\_parser\_create\_ns](function.xml-parser-create-ns.md) | encoding agora pode ser nulo. |
|  | [xml\_parser\_free](function.xml-parser-free.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_parser\_get\_option](function.xml-parser-get-option.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_parser\_get\_option](function.xml-parser-get-option.md) | Uma exceção ValueError agora é lançada se option for inválido. |
|  | [xml\_parser\_set\_option](function.xml-parser-set-option.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_parser\_set\_option](function.xml-parser-set-option.md) | Uma exceção ValueError agora é lançada se option for inválido. |
|  | [xml\_set\_character\_data\_handler](function.xml-set-character-data-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_default\_handler](function.xml-set-default-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_element\_handler](function.xml-set-element-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_end\_namespace\_decl\_handler](function.xml-set-end-namespace-decl-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_external\_entity\_ref\_handler](function.xml-set-external-entity-ref-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_notation\_decl\_handler](function.xml-set-notation-decl-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_object](function.xml-set-object.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_processing\_instruction\_handler](function.xml-set-processing-instruction-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_start\_namespace\_decl\_handler](function.xml-set-start-namespace-decl-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [xml\_set\_unparsed\_entity\_decl\_handler](function.xml-set-unparsed-entity-decl-handler.md) | O parâmetro parser agora espera uma instância de XMLParser; anteriormente, um resource xml válido era esperado. |
|  | [zip\_close](function.zip-close.md) | Esta função foi descontinuada em favor da API orientada a objetos, veja ZipArchive::close. |
|  | [zip\_entry\_close](function.zip-entry-close.md) | Esta função foi descontinuada em favor da API orientada a objetos. |
|  | [zip\_entry\_compressedsize](function.zip-entry-compressedsize.md) | Esta função foi descontinuada em favor da API orientada a objetos, veja ZipArchive::statIndex. |
|  | [zip\_entry\_compressionmethod](function.zip-entry-compressionmethod.md) | Esta função foi descontinuada em favor da API orientada a objetos, veja ZipArchive::statIndex. |
|  | [zip\_entry\_filesize](function.zip-entry-filesize.md) | Esta função está desencorajada em relação a API orientada a objeto, veja ZipArchive::statIndex. |
|  | [zip\_entry\_name](function.zip-entry-name.md) | Esta função está desencorajada em relação a API orientada a objeto, veja ZipArchive::statIndex. |
|  | [zip\_entry\_open](function.zip-entry-open.md) | Esta função está desencorajada em relação a API orientada a objeto. |
|  | [zip\_entry\_read](function.zip-entry-read.md) | Essa função está desencorajada em relação à API orientada a objetos, veja ZipArchive::getFromIndex. |
|  | [zip\_open](function.zip-open.md) | Essa função está desencorajada em relação à API orientada a objetos, veja ZipArchive::open. |
|  | [zip\_read](function.zip-read.md) | Essa função está desencorajada em relação à API orientada a objetos, veja ZipArchive::statIndex. |
|  | [GlobIterator::\_\_construct](globiterator.construct.md) | Agora lança um ValueError se directory for uma string vazia; anteriormente lançava um RuntimeException. |
|  | [IntlCalendar::setMinimalDaysInFirstWeek](intlcalendar.setminimaldaysinfirstweek.md) | Um ValueError agora é lançado em caso de entrada inválida. Anteriormente, false era retornado. |
|  | [IntlTimeZone::getIDForWindowsID](intltimezone.getidforwindowsid.md) | region agora pode ser nulo. |
|  | [LimitIterator::\_\_construct](limititerator.construct.md) | Agora lança um ValueError se o offset for menor que 0; anteriormente lançava um RuntimeException. |
|  | [LimitIterator::\_\_construct](limititerator.construct.md) | Agora lança um ValueError se o limit for menor que -1; anteriormente lançava um RuntimeException. |
|  | [Locale::getDisplayLanguage](locale.getdisplaylanguage.md) | displayLocale agora pode ser nulo. |
|  | [Locale::getDisplayName](locale.getdisplayname.md) | displayLocale agora pode ser nulo. |
|  | [Locale::getDisplayRegion](locale.getdisplayregion.md) | displayLocale agora pode ser nulo. |
|  | [Locale::getDisplayScript](locale.getdisplayscript.md) | displayLocale agora pode ser nulo. |
|  | [Locale::getDisplayVariant](locale.getdisplayvariant.md) | displayLocale agora pode ser nulo. |
|  | [mysqli\_result::fetch\_object](mysqli-result.fetch-object.md) | constructor\_args agora aceita [] para construtores sem parâmetros; anteriormente, uma exceção era lançada. |
|  | [mysqli\_result::field\_seek](mysqli-result.field-seek.md) | Esta função agora sempre retorna true. Anteriormente retornava false em caso de falha. |
|  | [mysqli\_stmt::close](mysqli-stmt.close.md) | Esta função agora sempre retorna true. Anteriormente retornava false em caso de falha. |
|  | [mysqli\_stmt::\_\_construct](mysqli-stmt.construct.md) | query agora pode ser nulo. |
|  | [mysqli::begin\_transaction](mysqli.begin-transaction.md) | name agora é anulável. |
|  | [mysqli::close](mysqli.close.md) | Esta função sempre retorna true. Anteriormente retornava false em caso de falha. |
|  | [mysqli::commit](mysqli.commit.md) | name agora pode ser nulo. |
|  | [mysqli::debug](mysqli.debug.md) | Esta função agora sempre retorna true. Anteriormente retornava false em caso de falha. |
|  | [mysqli::rollback](mysqli.rollback.md) | name agora é anulável. |
|  | [NumberFormatter::create](numberformatter.create.md) | pattern agora pode ser nulo. |
|  | [PDOStatement::fetchAll](pdostatement.fetchall.md) | Este método agora sempre retornará um array, enquanto antes poderia retornar false em caso de falha. |
|  | [Phar::addFile](phar.addfile.md) | localName agora é anulável. |
|  | [Phar::buildFromIterator](phar.buildfromiterator.md) | baseDirectory agora é anulável. |
|  | [Phar::compress](phar.compress.md) | extension agora é anulável. |
|  | [Phar::convertToData](phar.converttodata.md) | format, compression e extension agora são anuláveis. |
|  | [Phar::convertToExecutable](phar.converttoexecutable.md) | format, compression e extension agora são anuláveis. |
|  | [Phar::createDefaultStub](phar.createdefaultstub.md) | index e webIndex agora são anuláveis. |
|  | [Phar::decompress](phar.decompress.md) | extension agora é anulável. |
|  | [Phar::getMetadata](phar.getmetadata.md) | O parâmetro unserializeOptions foi adicionado. |
|  | [Phar::setDefaultStub](phar.setdefaultstub.md) | webIndex agora é anulável. |
|  | [Phar::setSignatureAlgorithm](phar.setsignaturealgorithm.md) | privateKey agora é anulável. |
|  | [Phar::webPhar](phar.webphar.md) | fileNotFoundScript e rewrite agora são anuláveis. |
|  | [PharData::addFile](phardata.addfile.md) | localName agora é anulável. |
|  | [PharData::buildFromIterator](phardata.buildfromiterator.md) | baseDirectory agora é anulável. |
|  | [PharData::compress](phardata.compress.md) | extension agora é anulável. |
|  | [PharData::convertToData](phardata.converttodata.md) | format, compression e extension agora são anuláveis. |
|  | [PharData::convertToExecutable](phardata.converttoexecutable.md) | format, compression e localName agora são anuláveis. |
|  | [PharData::decompress](phardata.decompress.md) | extension agora é anulável. |
|  | [PharData::setDefaultStub](phardata.setdefaultstub.md) | webIndex agora é anulável. |
|  | [PharData::setSignatureAlgorithm](phardata.setsignaturealgorithm.md) | privateKey agora é anulável. |
|  | [PharFileInfo::getMetadata](pharfileinfo.getmetadata.md) | O parâmetro unserializeOptions foi adicionado. |
|  | [PharFileInfo::isCompressed](pharfileinfo.iscompressed.md) | compression agora é anulável. |
|  | [RecursiveDirectoryIterator::\_\_construct](recursivedirectoryiterator.construct.md) | Agora lança um ValueError se directory for uma string vazia; anteriormente lançava um RuntimeException. |
|  | [RecursiveIteratorIterator::getSubIterator](recursiveiteratoriterator.getsubiterator.md) | level agora é anulável |
|  | [ReflectionClass::getConstants](reflectionclass.getconstants.md) | filter foi adicionado. |
|  | [ReflectionClass::getReflectionConstants](reflectionclass.getreflectionconstants.md) | filter foi adicionado. |
|  | [ReflectionFunction::invokeArgs](reflectionfunction.invokeargs.md) | As chaves args agora serão interpretadas como nomes de parâmetros, em vez de serem ignoradas silenciosamente. |
|  | [ReflectionFunction::isDisabled](reflectionfunction.isdisabled.md) | Esta função foi descontinuada, já que ReflectionFunction não pode mais ser construída para funções desabilitadas. |
|  | [ReflectionMethod::export](reflectionmethod.export.md) | Esta função foi removida. |
|  | [ReflectionMethod::getClosure](reflectionmethod.getclosure.md) | object agora é anulável. |
|  | [ReflectionMethod::invokeArgs](reflectionmethod.invokeargs.md) | As chaves args agora serão interpretadas como nomes de parâmetros, em vez de serem ignoradas silenciosamente. |
|  | [ReflectionParameter::getClass](reflectionparameter.getclass.md) | Esta função foi preterida em favor de ReflectionParameter::getType. |
|  | [ReflectionParameter::getDefaultValue](reflectionparameter.getdefaultvalue.md) | Este método agora permite obter o valor padrão dos parâmetros das funções integradas e métodos de classe integrados. Anteriormente, um ReflectionException era lançado. |
|  | [ReflectionParameter::getDefaultValueConstantName](reflectionparameter.getdefaultvalueconstantname.md) | Este método agora permite obter os nomes das constantes dos valores padrão das funções integradas e métodos de classe integrados. Anteriormente, um ReflectionException era lançado. |
|  | [ReflectionParameter::isArray](reflectionparameter.isarray.md) | Esta função foi preterida em favor de ReflectionParameter::getType. |
|  | [ReflectionParameter::isCallable](reflectionparameter.iscallable.md) | Esta função foi preterida em favor de ReflectionParameter::getType. |
|  | [ReflectionProperty::getValue](reflectionproperty.getvalue.md) | object agora é anulável. |
|  | [ReflectionProperty::isInitialized](reflectionproperty.isinitialized.md) | object agora é anulável. |
|  | [ReflectionType::\_\_toString](reflectiontype.tostring.md) | ReflectionType::\_\_toString foi retornado. |
|  | [Reflector::export](reflector.export.md) | Esta função foi removida. |
|  | [SimpleXMLElement::asXML](simplexmlelement.asxml.md) | filename é anulável agora. |
|  | [SoapClient::\_\_doRequest](soapclient.dorequest.md) | O tipo de oneWay é bool agora; antigamente era int. |
|  | [SoapClient::\_\_setCookie](soapclient.setcookie.md) | value agora é anulável. |
|  | [SoapServer::handle](soapserver.handle.md) | request agora é anulável. |
|  | [SplFileInfo::getFileInfo](splfileinfo.getfileinfo.md) | class é anulável agora. |
|  | [SplFileInfo::getPathInfo](splfileinfo.getpathinfo.md) | class é anulável agora. |
|  | [SplFileInfo::openFile](splfileinfo.openfile.md) | context é anulável agora. |
|  | [SplFixedArray::\_\_construct](splfixedarray.construct.md) | Agora lança um ValueError se size é negativo; anteriormente lançava um InvalidArgumentException. |
|  | [tidy::\_\_construct](tidy.construct.md) | filename, config, encoding e useIncludePath agora são anuláveis. |
|  | [tidy::parseFile](tidy.parsefile.md) | config e encoding agora podem ser anulados. |
|  | [tidy::parseString](tidy.parsestring.md) | config e encoding agora podem ser anulados. |
|  | [tidy::repairFile](tidy.repairfile.md) | tidy::repairFile agora é um método estático. |
|  | [tidy::repairFile](tidy.repairfile.md) | config e encoding agora podem ser anulados. |
|  | [tidy::repairString](tidy.repairstring.md) | tidy::repairString agora é um método estático. |
|  | [tidy::repairString](tidy.repairstring.md) | config e encoding agora podem ser anulados. |
|  | [tidy::repairString](tidy.repairstring.md) | Esta função não aceita mais o parâmetro useIncludePath. |
|  | [XMLReader::getAttribute](xmlreader.getattribute.md) | Esta função não pode mais retornar false. |
|  | [XMLReader::getAttributeNs](xmlreader.getattributens.md) | Esta função não pode mais retornar false. |
|  | [XMLReader::lookupNamespace](xmlreader.lookupnamespace.md) | Esta função não pode mais retornar false. |
|  | [XMLReader::next](xmlreader.next.md) | name agora pode ser nulo. |
|  | [XMLReader::open](xmlreader.open.md) | XMLReader::open agora é declarado como método estático, mas ainda pode ser chamado em uma instância de XMLReader. |
|  | [XMLReader::XML](xmlreader.xml.md) | XMLReader::XML agora é declarado como método estático, mas ainda pode ser chamado em uma instância de XMLReader. |
|  | [XMLWriter::endAttribute](xmlwriter.endattribute.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endCdata](xmlwriter.endcdata.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endComment](xmlwriter.endcomment.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endDocument](xmlwriter.enddocument.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endDtd](xmlwriter.enddtd.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endDtdAttlist](xmlwriter.enddtdattlist.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endDtdElement](xmlwriter.enddtdelement.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endDtdEntity](xmlwriter.enddtdentity.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endElement](xmlwriter.endelement.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::endPi](xmlwriter.endpi.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::flush](xmlwriter.flush.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::flush](xmlwriter.flush.md) | Esta função não pode mais retornar false. |
|  | [XMLWriter::fullEndElement](xmlwriter.fullendelement.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::openMemory](xmlwriter.openmemory.md) | Esta função agora retorna uma instância de XMLWriter em caso de sucesso. Anteriormente, um resource era retornado neste caso. |
|  | [XMLWriter::openUri](xmlwriter.openuri.md) | Esta função agora retorna uma instância de XMLWriter em caso de sucesso. Anteriormente, um resource era retornado neste caso. |
|  | [XMLWriter::outputMemory](xmlwriter.outputmemory.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::setIndent](xmlwriter.setindent.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::setIndentString](xmlwriter.setindentstring.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startAttribute](xmlwriter.startattribute.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startAttributeNs](xmlwriter.startattributens.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startAttributeNs](xmlwriter.startattributens.md) | prefix é anulável agora. |
|  | [XMLWriter::startCdata](xmlwriter.startcdata.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startComment](xmlwriter.startcomment.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startDocument](xmlwriter.startdocument.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startDtd](xmlwriter.startdtd.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startDtdAttlist](xmlwriter.startdtdattlist.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startDtdElement](xmlwriter.startdtdelement.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startDtdEntity](xmlwriter.startdtdentity.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startElement](xmlwriter.startelement.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startElementNs](xmlwriter.startelementns.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::startPi](xmlwriter.startpi.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::text](xmlwriter.text.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeAttribute](xmlwriter.writeattribute.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeAttributeNs](xmlwriter.writeattributens.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeCdata](xmlwriter.writecdata.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeComment](xmlwriter.writecomment.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeDtd](xmlwriter.writedtd.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeDtdAttlist](xmlwriter.writedtdattlist.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeDtdElement](xmlwriter.writedtdelement.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeDtdEntity](xmlwriter.writedtdentity.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeDtdEntity](xmlwriter.writedtdentity.md) | publicId, systemId e notationData agora são anuláveis. |
|  | [XMLWriter::writeElement](xmlwriter.writeelement.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeElementNs](xmlwriter.writeelementns.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writePi](xmlwriter.writepi.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [XMLWriter::writeRaw](xmlwriter.writeraw.md) | O parâmetro writer agora espera uma instância de XMLWriter; anteriormente, um resource era esperado. |
|  | [ZipArchive::addEmptyDir](ziparchive.addemptydir.md) | flags foi adicionado. |
|  | [ZipArchive::addFile](ziparchive.addfile.md) | flags foi adicionado. |
|  | [ZipArchive::addFromString](ziparchive.addfromstring.md) | flags foi adicionado. |
|  | [ZipArchive::addGlob](ziparchive.addglob.md) | "flags" em options foi adicionado. |
|  | [ZipArchive::addGlob](ziparchive.addglob.md) | "comp\_method", "comp\_flags", "enc\_method" e "enc\_password" em options foram adicionados. |
|  | [ZipArchive::getStatusString](ziparchive.getstatusstring.md) | Este método pode ser chamado em um arquivo fechado. |
|  | [ZipArchive::getStatusString](ziparchive.getstatusstring.md) | Este método não retorna mais false em caso de falha. |
|  | [ZipArchive::setEncryptionIndex](ziparchive.setencryptionindex.md) | password é anulável agora. |
|  | [ZipArchive::setEncryptionName](ziparchive.setencryptionname.md) | password é anulável agora. |
| 7.4.12 | [jdtounix](function.jdtounix.md) | O limite superior de julian\_day foi estendido. Antes, era 2465342 sem levar em consideração a arquitetura. |
|  | [tidyNode::isHtml](tidynode.ishtml.md) | Esta função foi corrigida para ter um comportamento razoável. Anteriormente, quase todos os nós eram relatados como sendo um nó HTML. |
| 7.4.4 | [proc\_open](function.proc-open.md) | Adicionada a opção create\_new\_console ao parâmetro options. |
| 7.4.3 | [curl\_setopt](function.curl-setopt.md) | Introduzido CURLOPT\_HTTP09\_ALLOWED. |
| 7.4.2 | [dba\_open](function.dba-open.md) | O driver lmdb agora suporta o parâmetro adicional map\_size. |
|  | [dba\_popen](function.dba-popen.md) | O driver lmdb agora suporta o parâmetro adicional map\_size. |
| 7.4.0 | [DatePeriod::\_\_construct](dateperiod.construct.md) | O parâmetro recurrences agora deve ser maior que 0. |
|  | [array\_key\_exists](function.array-key-exists.md) | Passar um object para o parâmetro array foi descontinuado. Use property\_exists em seu lugar. |
|  | [array\_merge](function.array-merge.md) | A função agora pode ser chamada sem argumentos. Anteriormente, ao menos um parâmetro era necessário. |
|  | [array\_merge\_recursive](function.array-merge-recursive.md) | Essa função agora pode ser chamada sem nenhum parâmetro. Anteriormente, pelo menos um parâmetro era necessário. |
|  | [base\_convert](function.base-convert.md) | Passar caracteres inválidos agora gerará uma nota de descontinuação. O resultado ainda é calculado como se os caracteres inválidos não existissem. |
|  | [bindec](function.bindec.md) | Passar caracteres inválidos agora irá gerar uma nota de descontinuação. O resultado ainda será computado como se os caracteres inválidos não existissem. |
|  | [chr](function.chr.md) | A função não mais aceita silenciosamente códigos não suportados no parâmetro codepoint, convertendo-os para 0. |
|  | [convert\_cyr\_string](function.convert-cyr-string.md) | Esta função foi descontinuada. |
|  | [curl\_version](function.curl-version.md) | O parâmetro opcional age foi descontinuado; se um valor for passado, será ignorado. |
|  | [current](function.current.md) | Instâncias de classes SPL agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface Iterator com o mesmo nome desta função. |
|  | [end](function.end.md) | Instâncias de classes SPL agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface Iterator com o mesmo nome desta função. |
|  | [ezmlm\_hash](function.ezmlm-hash.md) | Esta função foi descontinuada. |
|  | [fgetcsv](function.fgetcsv.md) | O parâmetro escape agora aceita uma string vazia para desabilitar o mecanismo de escape proprietário. |
|  | [fputcsv](function.fputcsv.md) | O parâmetro escape agora aceita uma string vazia para desabilitar o mecanismo de escape proprietário. |
|  | [get\_declared\_classes](function.get-declared-classes.md) | Anteriormente a função get\_declared\_classes sempre retornada classes pais antes das classes filhas. Isto não é mais o que acontece. Nenhuma ordem em particular é garantida para o valor de retorno de get\_declared\_classes. |
|  | [get\_magic\_quotes\_gpc](function.get-magic-quotes-gpc.md) | Esta função foi descontinuada. |
|  | [get\_magic\_quotes\_runtime](function.get-magic-quotes-runtime.md) | Esta função foi descontinuada. |
|  | [gzread](function.gzread.md) | Esta função agora retorna false em caso de falha; anteriormente, 0 era retornado. |
|  | [gzwrite](function.gzwrite.md) | Esta função agora retorna false em caso de falha; anteriormente retornava 0. |
|  | [hash\_algos](function.hash-algos.md) | Foi adicionado suporte para crc32c. |
|  | [hebrevc](function.hebrevc.md) | Esta função foi descontinuada. |
|  | [hexdec](function.hexdec.md) | Passar caracteres inválidos agora irá gerar uma nota de descontinuação. O resultado ainda será computado como se os caracteres inválidos não existissem. |
|  | [idn\_to\_ascii](function.idn-to-ascii.md) | O valor padrão de variant agora é INTL\_IDNA\_VARIANT\_UTS46 ao invés da INTL\_IDNA\_VARIANT\_2003 que foi descontinuada. |
|  | [idn\_to\_utf8](function.idn-to-utf8.md) | O valor padrão de variant agora é INTL\_IDNA\_VARIANT\_UTS46 ao invés da INTL\_IDNA\_VARIANT\_2003 que foi descontinuada. |
|  | [imagecropauto](function.imagecropauto.md) | O comportamento de imagecropauto() na libgd fornecida foi sincronizado com o da libgd de sistema: IMG\_CROP\_DEFAULT não mais retrocede para IMG\_CROP\_SIDES e o recorte de limites agora usa o mesmo algoritmo da libgd de sistema. |
|  | [imagecropauto](function.imagecropauto.md) | O valor padrão de mode mudou para IMG\_CROP\_AUTO. Anteriormente, o valor padrão era -1 que corresponde a IMG\_CROP\_DEFAULT, mas passar -1 agora foi descontinuado. |
|  | [imagefilter](function.imagefilter.md) | Suporte a dispersão (IMG\_FILTER\_SCATTER) foi adicionado. |
|  | [implode](function.implode.md) | Passar separator depois de array (isto é, usando a assinatura legada) foi descontinuado. |
|  | [key](function.key.md) | Instâncias de classes SPL agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface Iterator com o mesmo nome desta função. |
|  | [ldap\_control\_paged\_result](function.ldap-control-paged-result.md) | Esta função foi descontinuada. |
|  | [ldap\_control\_paged\_result\_response](function.ldap-control-paged-result-response.md) | Esta função foi descontinuada. |
|  | [method\_exists](function.method-exists.md) | As verificações de classe em relação aos métodos privados herdados agora retornam false. |
|  | [money\_format](function.money-format.md) | Esta função foi descontinuada. Utilize NumberFormatter::formatCurrency em seu lugar. |
|  | [next](function.next.md) | Instâncias de classes SPL agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface Iterator com o mesmo nome desta função. |
|  | [octdec](function.octdec.md) | Passar caracteres inválidos gerará um aviso de descontinuação. O resultado será calculado como se os caracteres inválidos não existissem. |
|  | [openssl\_random\_pseudo\_bytes](function.openssl-random-pseudo-bytes.md) | A função não retorna mais false em caso de falha, mas em vez disso lança uma Exception. |
|  | [password\_hash](function.password-hash.md) | O parâmetro algo agora espera uma string, mas ainda aceita ints para compatibilidade com versões anteriores. |
|  | [password\_hash](function.password-hash.md) | A extensão sodium fornece uma implementação alternativa para senhas Argon2. |
|  | [password\_needs\_rehash](function.password-needs-rehash.md) | O parâmetro algo agora espera uma string, mas ainda aceita ints para compatibilidade com versões anteriores. |
|  | [preg\_match](function.preg-match.md) | Quando a constante PREG\_UNMATCHED\_AS\_NULL é usada, os grupos de captura finais não correspondidos agora também são incluídos no resultado com o valor null (ou [null, -1] quando PREG\_OFFSET\_CAPTURE também é usado), de forma que $matches sempre tenha o mesmo tamanho. Anteriormente, eles eram omitidos. |
|  | [preg\_replace\_callback](function.preg-replace-callback.md) | O parâmetro flags foi adicionado. |
|  | [preg\_replace\_callback\_array](function.preg-replace-callback-array.md) | O parâmetro flags foi adicionado. |
|  | [prev](function.prev.md) | Instâncias de classes SPL agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface Iterator com o mesmo nome desta função. |
|  | [proc\_open](function.proc-open.md) | proc\_open agora aceita um array para o parâmetro command. |
|  | [proc\_open](function.proc-open.md) | Adicionada a opção create\_process\_group ao parâmetro options. |
|  | [reset](function.reset.md) | Instâncias de classes SPL agora são tratadas como objetos vazios que não possuem propriedades em vez de chamar o método da interface Iterator com o mesmo nome desta função. |
|  | [restore\_include\_path](function.restore-include-path.md) | Esta função foi descontinuada. |
|  | [stat](function.stat.md) | No Windows, o número do dispositivo agora é o número de série do volume que contém o arquivo, e o número do inode é o identificador associado com o arquivo. |
|  | [stat](function.stat.md) | As estatísticas size, atime, mtime e ctime de ligações simbólicas agora são sempre aquelas do alvo. Anteriormente não era o caso para compilações NTS do Windows. |
|  | [str\_getcsv](function.str-getcsv.md) | O parâmetro escape agora interpreta uma string vazia como o sinal para desabilitar o mecanismo de escape. Antes, uma string vazia era tratada como valor padrão do parâmetro. |
|  | [strip\_tags](function.strip-tags.md) | O parâmetro allowed\_tags agora alternativamente aceita um array. |
|  | [unserialize](function.unserialize.md) | Adicionado elemento max\_depth do array options para definir a profundidade máxima de estruturas permitidas durante desserialização. |
|  | [Locale::lookup](locale.lookup.md) | defaultLocale agora pode ser nulo. |
|  | [mysqli::\_\_construct](mysqli.construct.md) | Todos os parâmetros podem ser null. |
|  | [mysqli::real\_connect](mysqli.real-connect.md) | Todos os parâmetros agora são anuláveis. |
|  | [ReflectionClass::setStaticPropertyValue](reflectionclass.setstaticpropertyvalue.md) | Usar ReflectionClass::setStaticPropertyValue para definir uma propriedade privada ou protegida agora resulta em erro fatal. Anteriormente, lançava uma exceção ReflectionException. |
|  | [ReflectionMethod::export](reflectionmethod.export.md) | Esta função foi descontinuada. |
|  | [Reflector::export](reflector.export.md) | Esta função foi descontinuada. |
|  | [SplFileObject::fgetcsv](splfileobject.fgetcsv.md) | O parâmetro escape agora também aceita uma string vazia para desativar o mecanismo de escape proprietário. |
|  | [SplFileObject::fputcsv](splfileobject.fputcsv.md) | O parâmetro escape agora também aceita uma string vazia para desativar o mecanismo de escape proprietário. |
|  | [SplFileObject::fwrite](splfileobject.fwrite.md) | A função agora retorna false em vez de zero em caso de falha. |
|  | [SplFileObject::getCsvControl](splfileobject.getcsvcontrol.md) | O caractere de escape agora pode ser uma string vazia. |
|  | [SplFileObject::setCsvControl](splfileobject.setcsvcontrol.md) | O parâmetro escape agora também aceita uma string vazia para desativar o mecanismo de escape proprietário. |
|  | [SQLite3Stmt::bindParam](sqlite3stmt.bindparam.md) | param agora também suporta a notação @param. |
|  | [SQLite3Stmt::bindValue](sqlite3stmt.bindvalue.md) | param agora também suporta a notação @param. |
| 7.3.24 | [jdtounix](function.jdtounix.md) | O limite superior de julian\_day foi estendido. Antes, era 2465342 sem levar em consideração a arquitetura. |
|  | [tidyNode::isHtml](tidynode.ishtml.md) | Esta função foi corrigida para ter um comportamento razoável. Anteriormente, quase todos os nós eram relatados como sendo um nó HTML. |
| 7.3.15 | [curl\_setopt](function.curl-setopt.md) | Introduzido CURLOPT\_HTTP09\_ALLOWED. |
| 7.3.14 | [dba\_open](function.dba-open.md) | O driver lmdb agora suporta o parâmetro adicional map\_size. |
|  | [dba\_popen](function.dba-popen.md) | O driver lmdb agora suporta o parâmetro adicional map\_size. |
| 7.3.6 | [DatePeriod::\_\_construct](dateperiod.construct.md) | O parâmetro recurrences agora deve ser maior que 0. |
|  | [SplFileObject::\_\_toString](splfileobject.tostring.md) | Alterado de um alias de SplFileObject::current para um alias de SplFileObject::fgets. |
| 7.3.5 | [substr\_compare](function.substr-compare.md) | offset agora pode ser igual ao comprimento de haystack. |
| 7.3.0 | [DateTimeImmutable::createFromFormat](datetimeimmutable.createfromformat.md) | O especificador v em format foi adicionado. |
|  | [apache\_request\_headers](function.apache-request-headers.md) | Esta função tornou-se disponível na SAPI FPM. |
|  | [array\_push](function.array-push.md) | Essa função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |
|  | [array\_unshift](function.array-unshift.md) | Essa função agora pode ser chamada com apenas um parâmetro. Anteriomente, pelo menos dois parâmetros eram necessários. |
|  | [assert](function.assert.md) | Declarar uma função chamada assert() dentro de um namespace foi descontinuado. Uma declaração assim emite um E\_DEPRECATED. |
|  | [bcmul](function.bcmul.md) | bcmul agora retorna números com a escala solicitada. Formalmente o número retornado pode ter alguns zeros decimais omitidos. |
|  | [bcpow](function.bcpow.md) | bcpow agora retorna números com a escala solicitada. Mais exatamente, o número retornado pode omitir alguns zeros decimais. |
|  | [bcscale](function.bcscale.md) | bcscale pode ser utilizado para obter o falor de escala atual, quando utilizado para configurar. Anteriormente, scale era obrigatório, e bcscale sempre retornava true. |
|  | [compact](function.compact.md) | compact agora emite um erro nível E\_NOTICE se uma determinada string se refere a uma variável não definida. Anteriomente, strings como essa seriam ignoradas silenciosamente. |
|  | [curl\_getinfo](function.curl-getinfo.md) | Introduzidas as opções CURLINFO\_CONTENT\_LENGTH\_DOWNLOAD\_T, CURLINFO\_CONTENT\_LENGTH\_UPLOAD\_T, CURLINFO\_HTTP\_VERSION, CURLINFO\_PROTOCOL, CURLINFO\_PROXY\_SSL\_VERIFYRESULT, CURLINFO\_SCHEME, CURLINFO\_SIZE\_DOWNLOAD\_T, CURLINFO\_SIZE\_UPLOAD\_T, CURLINFO\_SPEED\_DOWNLOAD\_T, CURLINFO\_SPEED\_UPLOAD\_T, CURLINFO\_APPCONNECT\_TIME\_T, CURLINFO\_CONNECT\_TIME\_T, CURLINFO\_FILETIME\_T, CURLINFO\_NAMELOOKUP\_TIME\_T, CURLINFO\_PRETRANSFER\_TIME\_T, CURLINFO\_REDIRECT\_TIME\_T, CURLINFO\_STARTTRANSFER\_TIME\_T e CURLINFO\_TOTAL\_TIME\_T. |
|  | [curl\_setopt](function.curl-setopt.md) | Introduzido CURLOPT\_ABSTRACT\_UNIX\_SOCKET, CURLOPT\_KEEP\_SENDING\_ON\_ERROR, CURLOPT\_PRE\_PROXY, CURLOPT\_PROXY\_CAINFO, CURLOPT\_PROXY\_CAPATH, CURLOPT\_PROXY\_CRLFILE, CURLOPT\_PROXY\_KEYPASSWD, CURLOPT\_PROXY\_PINNEDPUBLICKEY, CURLOPT\_PROXY\_SSLCERT, CURLOPT\_PROXY\_SSLCERTTYPE, CURLOPT\_PROXY\_SSL\_CIPHER\_LIST, CURLOPT\_PROXY\_SSLKEY, CURLOPT\_PROXY\_SSLKEYTYPE, CURLOPT\_PROXY\_SSL\_OPTIONS, CURLOPT\_PROXY\_SSL\_VERIFYHOST, CURLOPT\_PROXY\_SSL\_VERIFYPEER, CURLOPT\_PROXY\_SSLVERSION, CURLOPT\_PROXY\_TLSAUTH\_PASSWORD, CURLOPT\_PROXY\_TLSAUTH\_TYPE, CURLOPT\_PROXY\_TLSAUTH\_USERNAME, CURLOPT\_SOCKS5\_AUTH, CURLOPT\_SUPPRESS\_CONNECT\_HEADERS, CURLOPT\_DISALLOW\_USERNAME\_IN\_URL, CURLOPT\_DNS\_SHUFFLE\_ADDRESSES, CURLOPT\_HAPPY\_EYEBALLS\_TIMEOUT\_MS, CURLOPT\_HAPROXYPROTOCOL, CURLOPT\_PROXY\_TLS13\_CIPHERS, CURLOPT\_SSH\_COMPRESSION, CURLOPT\_TIMEVALUE\_LARGE e CURLOPT\_TLS13\_CIPHERS. |
|  | [define](function.define.md) | case\_insensitive foi descontinuado e será removido na versão 8.0.0. |
|  | [ftp\_fget](function.ftp-fget.md) | O parâmetro mode agora é opcional. Antigamente era obrigatório. |
|  | [ftp\_fput](function.ftp-fput.md) | O parâmetro mode agora é opcional. Antigamente era obrigatório. |
|  | [ftp\_get](function.ftp-get.md) | O parâmetro mode agora é opcional. Antigamente era obrigatório. |
|  | [ftp\_nb\_fget](function.ftp-nb-fget.md) | O parâmetro mode agora é opcional. Antigamente era obrigatório. |
|  | [ftp\_nb\_fput](function.ftp-nb-fput.md) | O parâmetro mode agora é opcional. Antigamente era obrigatório. |
|  | [ftp\_nb\_get](function.ftp-nb-get.md) | O parâmetro mode agora é opcional. Antigamente era obrigatório. |
|  | [ftp\_nb\_put](function.ftp-nb-put.md) | O parâmetro mode agora é opcional. Antigamente era obrigatório. |
|  | [ftp\_put](function.ftp-put.md) | O parâmetro mode agora é opcional. Antigamente era obrigatório. |
|  | [getallheaders](function.getallheaders.md) | Esta função tornou-se disponível na SAPI FPM. |
|  | [imagecreatefromstring](function.imagecreatefromstring.md) | WEBP agora é suportado (caso seja suportado pela libgd em uso). |
|  | [is\_countable](function.is-countable.md) | A função is\_countable foi adicionada. |
|  | [json\_decode](function.json-decode.md) | Foi adicionado JSON\_THROW\_ON\_ERROR em flags |
|  | [json\_encode](function.json-encode.md) | Adicionado JSON\_THROW\_ON\_ERROR em flags. |
|  | [ldap\_add](function.ldap-add.md) | Suporte para o parâmetro controls adicionado. |
|  | [ldap\_compare](function.ldap-compare.md) | Suporte para controls foi adicionado |
|  | [ldap\_delete](function.ldap-delete.md) | Suporte para controls adicionado. |
|  | [ldap\_exop](function.ldap-exop.md) | Adicionado suporte para controls. |
|  | [ldap\_exop\_passwd](function.ldap-exop-passwd.md) | Adicionado suporte a controls. |
|  | [ldap\_list](function.ldap-list.md) | Adicionado suporte para controls. |
|  | [ldap\_mod\_add](function.ldap-mod-add.md) | Adicionado suporte para controls. |
|  | [ldap\_mod\_del](function.ldap-mod-del.md) | Adicionado suporte para controls. |
|  | [ldap\_mod\_replace](function.ldap-mod-replace.md) | Adicionado suporte para controls. |
|  | [ldap\_modify\_batch](function.ldap-modify-batch.md) | Adicionado suporte para controls. |
|  | [ldap\_mod\_add\_ext](function.ldap-mod_add-ext.md) | Adicionado suporte para controls. |
|  | [ldap\_mod\_del\_ext](function.ldap-mod_del-ext.md) | Adicionado suporte para controls |
|  | [ldap\_mod\_replace\_ext](function.ldap-mod_replace-ext.md) | Adicionado suporte para controls |
|  | [ldap\_parse\_result](function.ldap-parse-result.md) | Adicionado suporte para controls. |
|  | [ldap\_read](function.ldap-read.md) | Adicionado suporte para controls. |
|  | [ldap\_rename](function.ldap-rename.md) | Adicionado suporte para controls. |
|  | [ldap\_rename\_ext](function.ldap-rename-ext.md) | Adicionado suporte a controls. |
|  | [ldap\_search](function.ldap-search.md) | Adicionado suporte para controls. |
|  | [list](function.list.md) | Foi adicionado suporte para atribuições de referência na deconstrução de array. |
|  | [mb\_convert\_case](function.mb-convert-case.md) | Adicionado suporte para MB\_CASE\_FOLD, MB\_CASE\_UPPER\_SIMPLE, MB\_CASE\_LOWER\_SIMPLE, MB\_CASE\_TITLE\_SIMPLE, e MB\_CASE\_FOLD\_SIMPLE como mode. |
|  | [password\_hash](function.password-hash.md) | Suporte para senhas Argon2id usando PASSWORD\_ARGON2ID foi adicionado. |
|  | [preg\_quote](function.preg-quote.md) | O caractere # agora é escapado. |
|  | [session\_get\_cookie\_params](function.session-get-cookie-params.md) | A entrada "samesite" foi adicionada ao array retornado. |
|  | [session\_set\_cookie\_params](function.session-set-cookie-params.md) | Uma assinatura alternativa que suporta lifetime\_or\_options array foi adicionada. Esta assinatura suporta também a configuração do atributo de cookie SameSite. |
|  | [setcookie](function.setcookie.md) | Uma assinatura alternativa para suportar o array options foi adicionado. Essa assinatura também permite configurar o atributo SameSite do cookie. |
|  | [setrawcookie](function.setrawcookie.md) | Uma assinatura alternativa que suporta um array options foi adicionada. Esta assinatura também suporta a configuração do atributo de cookie "SameSite". |
|  | [stripos](function.stripos.md) | Passar um int em needle foi descontinuado. |
|  | [stristr](function.stristr.md) | Passar um int em needle foi descontinuado. |
|  | [strpos](function.strpos.md) | Passar um int em needle foi descontinuado. |
|  | [strrchr](function.strrchr.md) | Passar um int em needle foi descontinuado. |
|  | [strripos](function.strripos.md) | Passar um int no parâmetro needle foi descontinuado. |
|  | [strrpos](function.strrpos.md) | Passar um int no parâmetro needle foi descontinuado. |
|  | [strstr](function.strstr.md) | Passar um int em needle foi descontinuado. |
|  | [unlink](function.unlink.md) | No Windows, agora é possível realizar o unlink em arquivos abertos, quando antes isso falhava. Entretanto, ainda não é possível de recriar o arquivo apagado, até que o acessos ao arquivo anterior tenham sido fechados. |
|  | [var\_export](function.var-export.md) | Agora exporta objetos stdClass como um array convertido para um objeto ((object) array( ... )), ao invés de usar o método inexistente stdClass::\_\_setState. O efeito prático é que agora stdClass é exportável e o código resultante funcionará até mesmo em versões anteriores do PHP. |
|  | [xml\_parser\_get\_option](function.xml-parser-get-option.md) | options agora suporta XML\_OPTION\_SKIP\_TAGSTART e XML\_OPTION\_SKIP\_WHITE. |
|  | [xml\_set\_external\_entity\_ref\_handler](function.xml-set-external-entity-ref-handler.md) | O valor de retorno do handler não é mais ignorado se a extensão tiver sido construída com base em libxml. Anteriormente, o valor de retorno era ignorado e a análise nunca parava. |
| 7.2.19 | [DatePeriod::\_\_construct](dateperiod.construct.md) | O parâmetro recurrences agora deve ser maior que 0. |
|  | [SplFileObject::\_\_toString](splfileobject.tostring.md) | Alterado de um alias de SplFileObject::current para um alias de SplFileObject::fgets. |
| 7.2.18 | [litespeed\_finish\_request](function.litespeed-finish-request.md) | Esta função se tornou disponível. |
|  | [substr\_compare](function.substr-compare.md) | offset agora pode ser igual ao comprimento de haystack. |
| 7.2.12 | [DateInterval::format](dateinterval.format.md) | Os formatos F e f agora são sempre positivos. |
|  | [xml\_parser\_get\_option](function.xml-parser-get-option.md) | options agora suporta XML\_OPTION\_SKIP\_TAGSTART e XML\_OPTION\_SKIP\_WHITE. |
| 7.2.0 | [array\_unique](function.array-unique.md) | Se flags for SORT\_STRING, o array anterior foi copiado e os elementos não únicos foram removidos (sem empacotar o array em seguida), mas um novo array é criado ao adicionar os novos elementos. Isto pode resultar em índices numéricos diferentes. |
|  | [assert](function.assert.md) | Uso de strings no argumento assertion foi descontinuado. Isto agora emite um aviso E\_DEPRECATED quando ambos assert.active e zend.assertions estão configurados para 1. |
|  | [bcmod](function.bcmod.md) | num1 e num2 não são mais truncados para inteiro, de forma que o comportamento de bcmod é o mesmo de fmod ao invés do operador %. |
|  | [bcmod](function.bcmod.md) | O parâmetro scale foi adicionado. |
|  | [count](function.count.md) | count irá agora emitir um aviso em tipos contáveis inválidos passados no parâmetro value. |
|  | [date\_parse](function.date-parse.md) | O elemento zone do array de retorno agora representa segundos no lugar de minutos, e seu sinal é invertido. Por exemplo, -120 é agora 7200. |
|  | [date\_parse\_from\_format](function.date-parse-from-format.md) | O elemento zone do array retornado agora representa segundos em vez de minutos, e seu sinal é invertido. Por exemplo, -120 agora é 7200. |
|  | [date\_sun\_info](function.date-sun-info.md) | Os cálculos foram corrigidos com base na meia-noite local em vez do meio-dia local, o que muda os resultados um pouco. |
|  | [exif\_read\_data](function.exif-read-data.md) | O parâmetro file agora suporta tanto arquivos locais quanto recursos de fluxo. |
|  | [exif\_read\_data](function.exif-read-data.md) | Adicionado suporte aos seguintes formatos EXIF: Samsung DJI Panasonic Sony Pentax Minolta Sigma/Foveon AGFA Kyocera Ricoh Epson |
|  | [exif\_thumbnail](function.exif-thumbnail.md) | O parâmetro file agora suporta arquivos locais e recursos de fluxo. |
|  | [get\_class](function.get-class.md) | Antes desta versão o valor padrão para object era null e tinha o mesmo efeito de não se passar nenhum valor. Agora, null foi removido do valor padrão para object, e não é mais uma entrada válida. |
|  | [gettype](function.gettype.md) | Recursos já fechados agora são reportados como 'resource (closed)'. Anteriormente os valores retornados para recursos fechados eram 'unknown type'. |
|  | [hash\_copy](function.hash-copy.md) | Aceita e retorna HashContext em vez de recurso. |
|  | [hash\_final](function.hash-final.md) | Aceita HashContext em vez de recurso. |
|  | [hash\_hmac](function.hash-hmac.md) | O uso de funções de hash não criptográficas (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) foi desabilitado. |
|  | [hash\_hmac\_file](function.hash-hmac-file.md) | O uso de funções de hash não criptográficas (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) foi desabilitado. |
|  | [hash\_init](function.hash-init.md) | O uso de funções hash não criptográficas (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) com HASH\_HMAC foi desabilitado. |
|  | [hash\_init](function.hash-init.md) | Retorna HashContext em vez de recurso. |
|  | [hash\_pbkdf2](function.hash-pbkdf2.md) | O uso de funções de hash não criptográficas (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) foi desabilitado. |
|  | [hash\_update](function.hash-update.md) | Aceita HashContext em vez de recurso. |
|  | [hash\_update\_file](function.hash-update-file.md) | Aceita HashContext no lugar de um recurso. |
|  | [hash\_update\_stream](function.hash-update-stream.md) | Aceita HashContext em vez de recurso. |
|  | [idn\_to\_ascii](function.idn-to-ascii.md) | INTL\_IDNA\_VARIANT\_2003 foi descontinuada; use INTL\_IDNA\_VARIANT\_UTS46 em seu lugar. |
|  | [idn\_to\_utf8](function.idn-to-utf8.md) | INTL\_IDNA\_VARIANT\_2003 foi descontinuada; use INTL\_IDNA\_VARIANT\_UTS46 em seu lugar. |
|  | [imageantialias](function.imageantialias.md) | imageantialias agora está disponível de forma geral. Anteriormente estava disponível somente se o PHP fosse compilado com a versão já incluída da biblioteca GD. |
|  | [imagegd](function.imagegd.md) | imagegd agora permite gerar imagens em cores verdadeiras. Anteriormente, elas eram convertidas implicitamente para paleta. |
|  | [imagelayereffect](function.imagelayereffect.md) | Adicionada a constante IMG\_EFFECT\_MULTIPLY (requer libgd de sistema >= 2.1.1 ou a libgd incluída no pacote). |
|  | [imagetypes](function.imagetypes.md) | IMG\_BMP adicionado. |
|  | [is\_object](function.is-object.md) | is\_object agora retorna true para objetos desserializados sem definição de classe (classe de \_\_PHP\_Incomplete\_Class). Anteriormente false era retornado. |
|  | [json\_decode](function.json-decode.md) | associative agora é nullable. |
|  | [json\_decode](function.json-decode.md) | Foi adicionado JSON\_INVALID\_UTF8\_IGNORE, e JSON\_INVALID\_UTF8\_SUBSTITUTE em flags. |
|  | [json\_encode](function.json-encode.md) | Adicionado JSON\_INVALID\_UTF8\_IGNORE e JSON\_INVALID\_UTF8\_SUBSTITUTE em flags. |
|  | [mail](function.mail.md) | O parâmetro additional\_headers agora aceita um array. |
|  | [mb\_check\_encoding](function.mb-check-encoding.md) | Esta função agora aceita também um array como value. Anteriormente, apenas strings eram suportadas. |
|  | [mb\_convert\_encoding](function.mb-convert-encoding.md) | Esta função agora aceita um array como string. Anteriormente, apenas strings eram suportadas. |
|  | [mb\_parse\_str](function.mb-parse-str.md) | Chamar mb\_parse\_str sem o segundo parâmetro foi descontinuado. |
|  | [mb\_send\_mail](function.mb-send-mail.md) | O parâmetro additional\_headers agora também aceita um array. |
|  | [mt\_rand](function.mt-rand.md) | mt\_rand recebeu uma correção para um bug de descontinuação de módulo. Isso significa que as sequências geradas com uma semente específica podem ser diferentes do PHP 7.1 em máquinas de 64 bits. |
|  | [number\_format](function.number-format.md) | number\_format foi modificado para não ser capaz de retornar -0, anteriormente -0 poderia ser retornado para casos onde num fosse -0.01. |
|  | [openssl\_pkcs7\_verify](function.openssl-pkcs7-verify.md) | O parâmetro output\_filename foi adicionado. |
|  | [pack](function.pack.md) | Tipos float e double suportam tanto Big Endian quanto Little Endian. |
|  | [parse\_str](function.parse-str.md) | Utilização de parse\_str sem o segundo parâmetro agora emite um aviso de E\_DEPRECATED. |
|  | [password\_hash](function.password-hash.md) | Suporte para senhas Argon2i usando PASSWORD\_ARGON2I foi adicionado. |
|  | [preg\_match](function.preg-match.md) | A constante PREG\_UNMATCHED\_AS\_NULL agora é suportada para o parâmetro flags. |
|  | [preg\_match\_all](function.preg-match-all.md) | A constante PREG\_UNMATCHED\_AS\_NULL agora é suportada para o parâmetro flags. |
|  | [preg\_quote](function.preg-quote.md) | delimiter agora pode ser nulo. |
|  | [proc\_nice](function.proc-nice.md) | Esta função agora está disponível no Windows. |
|  | [rand](function.rand.md) | rand recebeu uma correção para um bug de descontinuação de módulo. Isso significa que as sequências geradas com uma semente específica podem ser diferentes do PHP 7.1 em máquinas de 64 bits. |
|  | [read\_exif\_data](function.read-exif-data.md) | O apelido desta função foi descontinuado. |
|  | [session\_abort](function.session-abort.md) | O tipo de retorno dessa função agora é bool. Antigamente, era void. |
|  | [session\_module\_name](function.session-module-name.md) | Agora é explicitamente proibido definir o nome do módulo como "user". Anteriormente, isso era silenciosamente ignorado. |
|  | [session\_name](function.session-name.md) | session\_name verifica status de sessão; anteriormente, apenas verificava status de cookie. Portanto, a versão antiga de session\_name permitia chamar session\_name após session\_start, que poderia travar o PHP e resultar em comportamento inesperado. |
|  | [session\_reset](function.session-reset.md) | O tipo de retorno desta função é bool agora. Anteriormente, era void. |
|  | [session\_set\_cookie\_params](function.session-set-cookie-params.md) | Retorna true em caso de sucesso ou false em caso de falha. Anteriormente a função retornava void. |
|  | [session\_unset](function.session-unset.md) | O tipo de retorno desta função é bool agora. Anteriormente, era void. |
|  | [session\_write\_close](function.session-write-close.md) | O tipo de retorno desta função é bool agora. Anteriormente, era void. |
|  | [set\_error\_handler](function.set-error-handler.md) | errcontext foi descontinuado. O uso deste parâmetro agora emite uma nota E\_DEPRECATED. |
|  | [unpack](function.unpack.md) | Tipos float e double suportam Big Endian e Little Endian. |
|  | [utf8\_decode](function.utf8-decode.md) | Esta função foi movida de extensão XML para o núcleo do PHP. Em versões anteriores, estava disponível somente se a extensão XML estivesse instalada. |
|  | [utf8\_encode](function.utf8-encode.md) | Esta função foi movida de extensão XML para o núcleo do PHP. Em versões anteriores, estava disponível somente se a extensão XML estivesse instalada. |
|  | [PDOStatement::debugDumpParams](pdostatement.debugdumpparams.md) | PDOStatement::debugDumpParams agora retorna o SQL enviado ao banco de dados, incluindo a consulta completa, bruta (incluindo os marcadores substituídos por seus valores vinculados). Observe que isto só estará disponível se as instrução preparadas emuladas estiverem habilitadas. |
|  | [ReflectionClass::getMethods](reflectionclass.getmethods.md) | filter agora é anulável. |
|  | [ReflectionClass::getProperties](reflectionclass.getproperties.md) | filter agora é anulável. |
|  | [SQLite3::openBlob](sqlite3.openblob.md) | O parâmetro flags foi adicionado, permitindo escrever BLOBs; anteriormente, apenas a leitura era suportada. |
| 7.1.24 | [xml\_parser\_get\_option](function.xml-parser-get-option.md) | options agora suporta XML\_OPTION\_SKIP\_TAGSTART e XML\_OPTION\_SKIP\_WHITE. |
| 7.1.5 | [IntlDateFormatter::format](intldateformatter.format.md) | Suporte para fornecer objetos DateTimeInterface ao parâmetro datetime foi adicionado. Anteriormente, somente objetos DateTime eram suportados. |
| 7.1.4 | [PDO::sqliteCreateFunction](pdo.sqlitecreatefunction.md) | O parâmetro flags foi adicionado. |
|  | [SQLite3::createFunction](sqlite3.createfunction.md) | O parâmetro flags foi adicionado. |
| 7.1.2 | [dns\_get\_record](function.dns-get-record.md) | Adicionado suporte para tipo de registro CAA. |
|  | [fopen](function.fopen.md) | A opção 'e' foi adicionada. |
| 7.1.1 | [get\_defined\_functions](function.get-defined-functions.md) | O parâmetro exclude\_disabled foi adicionado. |
|  | [pack](function.pack.md) | Os códigos "e", "E", "g" e "G" foram adicionados para habilitar suporte a ordem de byte para float e double. |
| 7.1.0 | [DateInterval::format](dateinterval.format.md) | Os formatos F e f foram adicionados. |
|  | [DateTime::setTime](datetime.settime.md) | O parâmetro microsecond foi adicionado. |
|  | [DateTimeImmutable::\_\_construct](datetimeimmutable.construct.md) | De agora em diante os microssegundos são preenchidos com o valor real. Não mais com '00000'. |
|  | [DateTimeImmutable::setTime](datetimeimmutable.settime.md) | O parâmetro microsecond foi incluído. |
|  | [DateTimeZone::listIdentifiers](datetimezone.listidentifiers.md) | O parâmetro countryCode agora pode ser nulo. |
|  | [array\_rand](function.array-rand.md) | O algoritmo de embaralhamento interno foi alterado para usar o Gerador de Números Aleatórios Mersenne Twister em vez da função rand da libc. |
|  | [curl\_multi\_setopt](function.curl-multi-setopt.md) | Introduzida a constante CURLMOPT\_PUSHFUNCTION. |
|  | [exif\_imagetype](function.exif-imagetype.md) | Adicionado suporte a WebP. |
|  | [file\_get\_contents](function.file-get-contents.md) | Suporte para offsets negativos foi adicionado. |
|  | [get\_headers](function.get-headers.md) | O parâmetro context foi adicionado. |
|  | [getenv](function.getenv.md) | O name agora pode ser omitido para recuperar um array associativo de todas as variáveis ​​de ambiente. |
|  | [getimagesize](function.getimagesize.md) | Foi adicionado suporte para WebP. |
|  | [getopt](function.getopt.md) | Acrescentando o parâmetro rest\_index. |
|  | [grapheme\_extract](function.grapheme-extract.md) | Suporte para offset negativo foi adicionado. |
|  | [grapheme\_stripos](function.grapheme-stripos.md) | Suporte para offset negativo foi adicionado. |
|  | [grapheme\_strpos](function.grapheme-strpos.md) | Suporte para offset negativo foi adicionado. |
|  | [hash\_algos](function.hash-algos.md) | Suporte para sha512/224, sha512/256, sha3-224, sha3-256, sha3-384 e sha3-512 foi adicionado. |
|  | [iconv\_strpos](function.iconv-strpos.md) | O suporte para offsets negativas foi adicionado. |
|  | [json\_decode](function.json-decode.md) | Uma chave JSON vazia ("") pode ser codificada para a propriedade vazia de objeto, em vez de usar uma chave com o valor \_empty\_. |
|  | [json\_encode](function.json-encode.md) | Adicionado JSON\_UNESCAPED\_LINE\_TERMINATORS em flags. |
|  | [json\_encode](function.json-encode.md) | É usado serialize\_precision em vez de precision quando codificado valores float. |
|  | [list](function.list.md) | Agora é possível especificar chaves em list. Isso habilita desconstruir os arrays com chaves não-inteiras e não-sequenciais. |
|  | [long2ip](function.long2ip.md) | O tipo do parâmetro ip foi alterado de string para int. |
|  | [mb\_ereg](function.mb-ereg.md) | mb\_ereg agora define matches como um array vazio se nada for correspondido. Anteriormente, matches não era modificado nesse caso. |
|  | [mb\_ereg\_replace](function.mb-ereg-replace.md) | A função verifica se string é válida para a codificação atual. |
|  | [mb\_ereg\_replace](function.mb-ereg-replace.md) | O modificador e foi descontinuado. |
|  | [mb\_ereg\_replace\_callback](function.mb-ereg-replace-callback.md) | A função verifica se string é válida para a codificação atual. |
|  | [mb\_ereg\_search\_setpos](function.mb-ereg-search-setpos.md) | Suporte para offsets negativo foi adicionado. |
|  | [mb\_eregi](function.mb-eregi.md) | mb\_eregi agora define matches como um array vazio, se nada coincidir. Anteriormente, matches não era modificado nesse caso. |
|  | [mb\_eregi\_replace](function.mb-eregi-replace.md) | A função verifica se string é válida para a codificação atual. |
|  | [mb\_eregi\_replace](function.mb-eregi-replace.md) | O modificador e foi descontinuado. |
|  | [mb\_regex\_set\_options](function.mb-regex-set-options.md) | A opção "e" agora emite um E\_DEPRECATED. |
|  | [mb\_strimwidth](function.mb-strimwidth.md) | Adicionado suporte para starts e widths negativos. |
|  | [mb\_stripos](function.mb-stripos.md) | Adicionado suporte para offset negativo. |
|  | [mb\_strpos](function.mb-strpos.md) | Adicionado suporte para posições negativas no parâmetro offset. |
|  | [mt\_rand](function.mt-rand.md) | rand foi transformado em um apelido de mt\_rand. |
|  | [mt\_rand](function.mt-rand.md) | mt\_rand foi atualizado para usar a versão fixa e correta do algoritmo Mersenne Twister. Para voltar ao comportamento antigo, use mt\_srand com MT\_RAND\_PHP como segundo parâmetro. |
|  | [mt\_srand](function.mt-srand.md) | srand foi transformado em um apelido de mt\_srand. |
|  | [mt\_srand](function.mt-srand.md) | mt\_rand foi atualizado para usar a versão fixa e correta do algoritmo Mersenne Twister. Para voltar ao comportamento antigo, use mt\_srand com MT\_RAND\_PHP como segundo parâmetro. |
|  | [openssl\_csr\_new](function.openssl-csr-new.md) | options agora também suporta curve\_name. |
|  | [openssl\_decrypt](function.openssl-decrypt.md) | Os parâmetros tag e aad foram adicionados. |
|  | [openssl\_encrypt](function.openssl-encrypt.md) | Os parâmetros tag, aad e tag\_length foram adicionados. |
|  | [openssl\_pkey\_new](function.openssl-pkey-new.md) | A chave curve\_name do parâmetro options foi adicionada para tornar possível a criação de chaves EC com base nos algoritmos de Curva Elíptica. |
|  | [output\_add\_rewrite\_var](function.output-add-rewrite-var.md) | A partir do PHP 7.1.0, um buffer de saída dedicado é usado, url\_rewriter.tags é usado somente para funções de saída e url\_rewriter.hosts está disponível. Antes do PHP 7.1.0, variáveis ​​de reescrita definidas por output\_add\_rewrite\_var compartilhavam um buffer de saída com suporte transparente para ID de sessão (veja session.trans\_sid\_tags). |
|  | [output\_reset\_rewrite\_vars](function.output-reset-rewrite-vars.md) | Antes do PHP 7.1.0, as variáveis de reescrita definidas por output\_add\_rewrite\_var usavam o mesmo buffer de saída "trans sid" do módulo de sessão. Desde o PHP 7.1.0, um buffer de saída dedicado é usado e output\_reset\_rewrite\_vars apenas remove variáveis de reescrita definidas por output\_add\_rewrite\_var. |
|  | [pcntl\_signal](function.pcntl-signal.md) | A partir do PHP 7.1.0, a função de retorno do manipulador recebe um segundo argumento contendo o a informação do sinal específico. Este dado é fornecido somente se o sistema operacional tiver a estrutura siginfo\_t. Se o sistema operacional não implementar siginfo\_t, NULL será fornecido. |
|  | [pcntl\_signal\_get\_handler](function.pcntl-signal-get-handler.md) | pcntl\_signal\_get\_handler foi adicionado. |
|  | [pg\_fetch\_all](function.pg-fetch-all.md) | O parâmetro mode foi adicionado. |
|  | [pg\_last\_notice](function.pg-last-notice.md) | O parâmetro mode foi adicionado. |
|  | [pg\_select](function.pg-select.md) | O parâmetro mode foi adicionado. |
|  | [rand](function.rand.md) | rand foi transformado em um apelido de mt\_rand. |
|  | [session\_start](function.session-start.md) | session\_start agora retorna false e não mais inicializa $\_SESSION quando este falha em iniciar a sessão. |
|  | [shuffle](function.shuffle.md) | O algoritmo interno de randomização mudou para o Gerado de Números Aleatórios Mersenne Twister no lugar da função rand do libc. |
|  | [srand](function.srand.md) | srand foi transformado em um apelido de mt\_srand. |
|  | [str\_shuffle](function.str-shuffle.md) | O algoritmo interno de randomização mudou e agora usa o Gerador de Números Aleatórios Mersenne Twister em vez da função rand da biblioteca libc. |
|  | [stripos](function.stripos.md) | Suporte para valores negativos em offset foi adicionado. |
|  | [strpos](function.strpos.md) | Suporte a offset negativo foi adicionado. |
|  | [substr\_count](function.substr-count.md) | Suporte a valores negativos para offset e length foi adicionado. length agora também pode ser 0. |
|  | [tempnam](function.tempnam.md) | tempnam agora emite um aviso ao cair de volta no diretório temporário do sistema. |
|  | [unpack](function.unpack.md) | O parâmetro opcional offset foi adicionado. |
|  | [unserialize](function.unserialize.md) | O elemento allowed\_classes de options agora é estritamente tipado, isto é, se algo que não seja um array ou um bool for fornecido, unserialize retorna false e emite um erro de nível E\_WARNING. |
|  | [ReflectionType::\_\_toString](reflectiontype.tostring.md) | ReflectionType::\_\_toString foi descontinuado. |
|  | [SessionHandler::gc](sessionhandler.gc.md) | Antes dessa versão, a função retornava true no caso de sucesso. |
|  | [SessionHandlerInterface::gc](sessionhandlerinterface.gc.md) | Antes desta versão, a função retornava true em caso de sucesso. |
| 7.0.16 | [dns\_get\_record](function.dns-get-record.md) | Adicionado suporte para tipo de registro CAA. |
|  | [fopen](function.fopen.md) | A opção 'e' foi adicionada. |
| 7.0.15 | [get\_defined\_functions](function.get-defined-functions.md) | O parâmetro exclude\_disabled foi adicionado. |
|  | [pack](function.pack.md) | Os códigos "e", "E", "g" e "G" foram adicionados para habilitar suporte a ordem de byte para float e double. |
| 7.0.11 | [iconv\_substr](function.iconv-substr.md) | Se string for igual ao comprimento dos caracteres de offset, uma string vazia será retornada. Antes desta versão, false era retornado neste caso. |
| 7.0.10 | [imagetypes](function.imagetypes.md) | IMG\_WEBP adicionado. |
|  | [SplFileObject::getCsvControl](splfileobject.getcsvcontrol.md) | Adicionado o caractere de escape ao array retornado. |
|  | [SQLite3::\_\_construct](sqlite3.construct.md) | O filename agora pode estar vazio para usar um banco de dados privado, temporário no disco. |
| 7.0.9 | [getenv](function.getenv.md) | O parâmetro local\_only foi adicionado. |
| 7.0.7 | [curl\_multi\_setopt](function.curl-multi-setopt.md) | Introduzidas as constantes CURLMOPT\_CHUNK\_LENGTH\_PENALTY\_SIZE, CURLMOPT\_CONTENT\_LENGTH\_PENALTY\_SIZE, CURLMOPT\_MAX\_HOST\_CONNECTIONS, CURLMOPT\_MAX\_PIPELINE\_LENGTH e CURLMOPT\_MAX\_TOTAL\_CONNECTIONS. |
|  | [curl\_setopt](function.curl-setopt.md) | Introduzido CURL\_HTTP\_VERSION\_2, CURL\_HTTP\_VERSION\_2\_PRIOR\_KNOWLEDGE, CURL\_HTTP\_VERSION\_2TLS, CURL\_REDIR\_POST\_301, CURL\_REDIR\_POST\_302, CURL\_REDIR\_POST\_303, CURL\_REDIR\_POST\_ALL, CURL\_VERSION\_KERBEROS5, CURL\_VERSION\_PSL, CURL\_VERSION\_UNIX\_SOCKETS, CURLAUTH\_NEGOTIATE, CURLAUTH\_NTLM\_WB, CURLFTP\_CREATE\_DIR, CURLFTP\_CREATE\_DIR\_NONE, CURLFTP\_CREATE\_DIR\_RETRY, CURLHEADER\_SEPARATE, CURLHEADER\_UNIFIED, CURLMOPT\_CHUNK\_LENGTH\_PENALTY\_SIZE, CURLMOPT\_CONTENT\_LENGTH\_PENALTY\_SIZE, CURLMOPT\_MAX\_HOST\_CONNECTIONS, CURLMOPT\_MAX\_PIPELINE\_LENGTH, CURLMOPT\_MAX\_TOTAL\_CONNECTIONS, CURLOPT\_CONNECT\_TO, CURLOPT\_DEFAULT\_PROTOCOL, CURLOPT\_DNS\_INTERFACE, CURLOPT\_DNS\_LOCAL\_IP4, CURLOPT\_DNS\_LOCAL\_IP6, CURLOPT\_EXPECT\_100\_TIMEOUT\_MS, CURLOPT\_HEADEROPT, CURLOPT\_LOGIN\_OPTIONS, CURLOPT\_PATH\_AS\_IS, CURLOPT\_PINNEDPUBLICKEY, CURLOPT\_PIPEWAIT, CURLOPT\_PROXY\_SERVICE\_NAME, CURLOPT\_PROXYHEADER, CURLOPT\_SASL\_IR, CURLOPT\_SERVICE\_NAME, CURLOPT\_SSL\_ENABLE\_ALPN, CURLOPT\_SSL\_ENABLE\_NPN, CURLOPT\_SSL\_FALSESTART, CURLOPT\_SSL\_VERIFYSTATUS, CURLOPT\_STREAM\_WEIGHT, CURLOPT\_TCP\_FASTOPEN, CURLOPT\_TFTP\_NO\_OPTIONS, CURLOPT\_UNIX\_SOCKET\_PATH, CURLOPT\_XOAUTH2\_BEARER, CURLPROTO\_SMB, CURLPROTO\_SMBS, CURLPROXY\_HTTP\_1\_0, CURLSSH\_AUTH\_AGENT e CURLSSLOPT\_NO\_REVOKE. |

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
