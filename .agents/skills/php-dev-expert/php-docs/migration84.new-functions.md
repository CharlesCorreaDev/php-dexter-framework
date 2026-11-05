# Novas Funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration84.new-functions.php

---

## Novas Funções

### Núcleo do PHP

- [request\_parse\_body()](function.request-parse-body.md)

### BCMath

- [bcceil()](function.bcceil.md)
- [bcdivmod()](function.bcdivmod.md)
- [bcfloor()](function.bcfloor.md)
- [bcround()](function.bcround.md)

### Date

- [DateTime::createFromTimestamp()](datetime.createfromtimestamp.md)
- [DateTime::getMicrosecond()](datetimeinterface.getmicrosecond.md)
- [DateTime::setMicrosecond()](datetime.setmicrosecond.md)
- [DateTimeImmutable::createFromTimestamp()](datetimeimmutable.createfromtimestamp.md)
- [DateTimeImmutable::getMicrosecond()](datetimeinterface.getmicrosecond.md)
- [DateTimeImmutable::setMicrosecond()](datetimeimmutable.setmicrosecond.md)

### DOM

- [DOMNode::compareDocumentPosition()](domnode.comparedocumentposition.md)
- [DOMXPath::registerPhpFunctionNS()](domxpath.registerphpfunctionns.md)
- [DOMXPath::quote()](domxpath.quote.md)

### Hash

- [HashContext::\_\_debugInfo()](hashcontext.debuginfo.md)

### Intl

- [IntlTimeZone::getIanaID()](intltimezone.getianaid.md)
- [intltz\_get\_iana\_id()](intltimezone.getianaid.md)
- [IntlDateFormatter::parseToCalendar()](intldateformatter.parsetocalendar.md)
- [Spoofchecker::setAllowedChars()](spoofchecker.setallowedchars.md)
- [grapheme\_str\_split()](function.grapheme-str-split.md)

### MBString

- [mb\_trim()](function.mb-trim.md)
- [mb\_ltrim()](function.mb-ltrim.md)
- [mb\_rtrim()](function.mb-rtrim.md)
- [mb\_ucfirst()](function.mb-ucfirst.md)
- [mb\_lcfirst()](function.mb-lcfirst.md)

### Opcache

- [opcache\_jit\_blacklist()](function.opcache-jit-blacklist.md)

### PCNTL

- [pcntl\_getcpu()](function.pcntl-getcpu.md)
- [pcntl\_getcpuaffinity()](function.pcntl-getcpuaffinity.md)
- [pcntl\_getqos\_class()](function.pcntl-getqos-class.md)
- [pcntl\_setns()](function.pcntl-setns.md)
- [pcntl\_setqos\_class()](function.pcntl-setqos-class.md)
- [pcntl\_waitid()](function.pcntl-waitid.md)

### PDO\_PGSQL

- [Pdo\Pgsql::setNoticeCallback()](pdo-pgsql.setnoticecallback.md)

### PGSQL

- [pg\_change\_password()](function.pg-change-password.md)
- [pg\_jit()](function.pg-jit.md)
- [pg\_put\_copy\_data()](function.pg-put-copy-data.md)
- [pg\_put\_copy\_end()](function.pg-put-copy-end.md)
- [pg\_result\_memory\_size()](function.pg-result-memory-size.md)
- [pg\_set\_chunked\_rows\_size()](function.pg-set-chunked-rows-size.md)
- [pg\_socket\_poll()](function.pg-socket-poll.md)

### Reflection

Os métodos a seguir estão relacionados à nova funcionalidade de objetos lentos:

- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md)
- [ReflectionClass::newLazyProxy()](reflectionclass.newlazyproxy.md)
- [ReflectionClass::resetAsLazyGhost()](reflectionclass.resetaslazyghost.md)
- [ReflectionClass::resetAsLazyProxy()](reflectionclass.resetaslazyproxy.md)
- [ReflectionClass::isUninitializedLazyObject()](reflectionclass.isuninitializedlazyobject.md)
- [ReflectionClass::initializeLazyObject()](reflectionclass.initializelazyobject.md)
- [ReflectionClass::markLazyObjectAsInitialized()](reflectionclass.marklazyobjectasinitialized.md)
- [ReflectionClass::getLazyInitializer()](reflectionclass.getlazyinitializer.md)
- [ReflectionProperty::skipLazyInitialization()](reflectionproperty.skiplazyinitialization.md)
- [ReflectionProperty::setRawValueWithoutLazyInitialization()](reflectionproperty.setrawvaluewithoutlazyinitialization.md)

- [ReflectionClassConstant::isDeprecated()](reflectionclassconstant.isdeprecated.md)
- [ReflectionGenerator::isClosed()](reflectiongenerator.isclosed.md)
- [ReflectionProperty::isDynamic()](reflectionproperty.isdynamic.md)

### Sodium

- sodium\_crypto\_aead\_aegis128l\_\*
- sodium\_crypto\_aead\_aegis256l\_\*

### SPL

- [SplObjectStorage::seek()](splobjectstorage.seek.md)

### SOAP

- [SoapServer::\_\_getLastResponse()](soapserver.getlastresponse.md)

### Standard

- [http\_get\_last\_response\_headers()](function.http-get-last-response-headers.md)
- [http\_clear\_last\_response\_headers()](function.http-clear-last-response-headers.md)
- [fpow()](function.fpow.md)
- [array\_all()](function.array-all.md)
- [array\_any()](function.array-any.md)
- [array\_find()](function.array-find.md)
- [array\_find\_key()](function.array-find-key.md)

### Tidy

- [tidyNode::getNextSibling()](tidynode.getnextsibling.md)
- [tidyNode::getPreviousSibling()](tidynode.getprevioussibling.md)

### XMLReader

- [XMLReader::fromStream()](xmlreader.fromstream.md)
- [XMLReader::fromUri()](xmlreader.fromuri.md)
- [XMLReader::fromString()](xmlreader.fromstring.md)

### XMLWriter

- [XMLWriter::toStream()](xmlwriter.tostream.md)
- [XMLWriter::toUri()](xmlwriter.touri.md)
- [XMLWriter::toMemory()](xmlwriter.tomemory.md)

### XSL

- [XSLTProcessor::registerPhpFunctionNS()](xsltprocessor.registerphpfunctionns.md)

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
