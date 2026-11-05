# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soap.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Constantes SOAP**

| Constante | Valor | Descrição |
| --- | --- | --- |
| **`SOAP_1_1`** ([int](language.types.integer.md)) | 1 | Especifica o uso do SOAP 1.1 quando passada opção como `soap_version` para [SoapServer::\_\_construct()](soapserver.construct.md) ou [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_1_2`** ([int](language.types.integer.md)) | 2 | Especifica o uso do SOAP 1.2 quando passada opção como `soap_version` para [SoapServer::\_\_construct()](soapserver.construct.md) ou [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_PERSISTENCE_SESSION`** ([int](language.types.integer.md)) | 1 |  |
| **`SOAP_PERSISTENCE_REQUEST`** ([int](language.types.integer.md)) | 2 |  |
| **`SOAP_FUNCTIONS_ALL`** ([int](language.types.integer.md)) | 999 | Descontinuada a partir do PHP 8.4.0. |
| **`SOAP_ENCODED`** ([int](language.types.integer.md)) | 1 | Especifica o uso da codificação SOAP quando passada opção como `use` para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_LITERAL`** ([int](language.types.integer.md)) | 2 | Especifica o uso de codificação específica do serviço quando passada opção como `use` para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_RPC`** ([int](language.types.integer.md)) | 1 | Especifica o uso de ligação no estilo RPC quando passada como opção de `style` para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_DOCUMENT`** ([int](language.types.integer.md)) | 2 | Especifica o uso de vinculação de documento quando passada como opção de `style` para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_ACTOR_NEXT`** ([int](language.types.integer.md)) | 1 |  |
| **`SOAP_ACTOR_NONE`** ([int](language.types.integer.md)) | 2 |  |
| **`SOAP_ACTOR_UNLIMATERECEIVER`** ([int](language.types.integer.md)) | 3 |  |
| **`SOAP_COMPRESSION_ACCEPT`** ([int](language.types.integer.md)) | 32 | Especifica o uso de um cabeçalho "Accept-Encoding" quando aprovado como parte da [opção `compression`](soapclient.construct.md#soapclient.construct.options.compression) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_COMPRESSION_GZIP`** ([int](language.types.integer.md)) | 0 | Especifica o uso da compactação gzip quando aprovado como parte da [opção `compression`](soapclient.construct.md#soapclient.construct.options.compression) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_COMPRESSION_DEFLATE`** ([int](language.types.integer.md)) | 16 | Especifica o uso da compactação deflacionada quando aprovado como parte da [opção `compression`](soapclient.construct.md#soapclient.construct.options.compression) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_AUTHENTICATION_BASIC`** ([int](language.types.integer.md)) | 0 | Especifica o uso de autenticação básica HTTP quando passado como opção `authentication` para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_AUTHENTICATION_DIGEST`** ([int](language.types.integer.md)) | 1 | Especifica o uso da autenticação HTTP Digest quando passada como opção de `authentication` para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_SSL_METHOD_TLS`** ([int](language.types.integer.md)) | 0 | Usado com a descontinuada [opção `ssl_method`](soapclient.construct.md#soapclient.construct.options.ssl-method) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_SSL_METHOD_SSLv2`** ([int](language.types.integer.md)) | 1 | Usado com a descontinuada [opção `ssl_method`](soapclient.construct.md#soapclient.construct.options.ssl-method) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_SSL_METHOD_SSLv3`** ([int](language.types.integer.md)) | 2 | Usado com a descontinuada [opção `ssl_method`](soapclient.construct.md#soapclient.construct.options.ssl-method) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_SSL_METHOD_SSLv23`** ([int](language.types.integer.md)) | 3 | Usado com a descontinuada [opção `ssl_method`](soapclient.construct.md#soapclient.construct.options.ssl-method) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`UNKNOWN_TYPE`** ([int](language.types.integer.md)) | 999998 |  |
| **`XSD_STRING`** ([int](language.types.integer.md)) | 101 |  |
| **`XSD_BOOLEAN`** ([int](language.types.integer.md)) | 102 |  |
| **`XSD_DECIMAL`** ([int](language.types.integer.md)) | 103 |  |
| **`XSD_FLOAT`** ([int](language.types.integer.md)) | 104 |  |
| **`XSD_DOUBLE`** ([int](language.types.integer.md)) | 105 |  |
| **`XSD_DURATION`** ([int](language.types.integer.md)) | 106 |  |
| **`XSD_DATETIME`** ([int](language.types.integer.md)) | 107 |  |
| **`XSD_TIME`** ([int](language.types.integer.md)) | 108 |  |
| **`XSD_DATE`** ([int](language.types.integer.md)) | 109 |  |
| **`XSD_GYEARMONTH`** ([int](language.types.integer.md)) | 110 |  |
| **`XSD_GYEAR`** ([int](language.types.integer.md)) | 111 |  |
| **`XSD_GMONTHDAY`** ([int](language.types.integer.md)) | 112 |  |
| **`XSD_GDAY`** ([int](language.types.integer.md)) | 113 |  |
| **`XSD_GMONTH`** ([int](language.types.integer.md)) | 114 |  |
| **`XSD_HEXBINARY`** ([int](language.types.integer.md)) | 115 |  |
| **`XSD_BASE64BINARY`** ([int](language.types.integer.md)) | 116 |  |
| **`XSD_ANYURI`** ([int](language.types.integer.md)) | 117 |  |
| **`XSD_QNAME`** ([int](language.types.integer.md)) | 118 |  |
| **`XSD_NOTATION`** ([int](language.types.integer.md)) | 119 |  |
| **`XSD_NORMALIZEDSTRING`** ([int](language.types.integer.md)) | 120 |  |
| **`XSD_TOKEN`** ([int](language.types.integer.md)) | 121 |  |
| **`XSD_LANGUAGE`** ([int](language.types.integer.md)) | 122 |  |
| **`XSD_NMTOKEN`** ([int](language.types.integer.md)) | 123 |  |
| **`XSD_NAME`** ([int](language.types.integer.md)) | 124 |  |
| **`XSD_NCNAME`** ([int](language.types.integer.md)) | 125 |  |
| **`XSD_ID`** ([int](language.types.integer.md)) | 126 |  |
| **`XSD_IDREF`** ([int](language.types.integer.md)) | 127 |  |
| **`XSD_IDREFS`** ([int](language.types.integer.md)) | 128 |  |
| **`XSD_ENTITY`** ([int](language.types.integer.md)) | 129 |  |
| **`XSD_ENTITIES`** ([int](language.types.integer.md)) | 130 |  |
| **`XSD_INTEGER`** ([int](language.types.integer.md)) | 131 |  |
| **`XSD_NONPOSITIVEINTEGER`** ([int](language.types.integer.md)) | 132 |  |
| **`XSD_NEGATIVEINTEGER`** ([int](language.types.integer.md)) | 133 |  |
| **`XSD_LONG`** ([int](language.types.integer.md)) | 134 |  |
| **`XSD_INT`** ([int](language.types.integer.md)) | 135 |  |
| **`XSD_SHORT`** ([int](language.types.integer.md)) | 136 |  |
| **`XSD_BYTE`** ([int](language.types.integer.md)) | 137 |  |
| **`XSD_NONNEGATIVEINTEGER`** ([int](language.types.integer.md)) | 138 |  |
| **`XSD_UNSIGNEDLONG`** ([int](language.types.integer.md)) | 139 |  |
| **`XSD_UNSIGNEDINT`** ([int](language.types.integer.md)) | 140 |  |
| **`XSD_UNSIGNEDSHORT`** ([int](language.types.integer.md)) | 141 |  |
| **`XSD_UNSIGNEDBYTE`** ([int](language.types.integer.md)) | 142 |  |
| **`XSD_POSITIVEINTEGER`** ([int](language.types.integer.md)) | 143 |  |
| **`XSD_NMTOKENS`** ([int](language.types.integer.md)) | 144 |  |
| **`XSD_ANYTYPE`** ([int](language.types.integer.md)) | 145 |  |
| **`XSD_ANYXML`** ([int](language.types.integer.md)) | 147 |  |
| **`APACHE_MAP`** ([int](language.types.integer.md)) | 200 |  |
| **`SOAP_ENC_OBJECT`** ([int](language.types.integer.md)) | 301 |  |
| **`SOAP_ENC_ARRAY`** ([int](language.types.integer.md)) | 300 |  |
| **`XSD_1999_TIMEINSTANT`** ([int](language.types.integer.md)) | 401 |  |
| **`XSD_NAMESPACE`** ([string](language.types.string.md)) | http://www.w3.org/2001/XMLSchema |  |
| **`XSD_1999_NAMESPACE`** ([string](language.types.string.md)) | http://www.w3.org/1999/XMLSchema |  |
| **`SOAP_SINGLE_ELEMENT_ARRAYS`** ([int](language.types.integer.md)) | 1 | Usado com a opção [`features`](soapclient.construct.md#soapclient.construct.options.features) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_WAIT_ONE_WAY_CALLS`** ([int](language.types.integer.md)) | 2 | Usado com a opção [`features`](soapclient.construct.md#soapclient.construct.options.features) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`SOAP_USE_XSI_ARRAY_TYPE`** ([int](language.types.integer.md)) | 4 | Usado com a opção [`features`](soapclient.construct.md#soapclient.construct.options.features) para [SoapClient::\_\_construct()](soapclient.construct.md). |
| **`WSDL_CACHE_NONE`** ([int](language.types.integer.md)) | 0 | Desativa o cache WSDL quando usado na opção [soap.wsdl\_cache](soap.configuration.md#ini.soap.wsdl-cache) configuração ou a opção `wsdl_cache` para [SoapClient::\_\_construct()](soapclient.construct.md) e [SoapServer::\_\_construct()](soapserver.construct.md). |
| **`WSDL_CACHE_DISK`** ([int](language.types.integer.md)) | 1 | Especifica o uso do cache WSDL em disco somente quando usado na opção [soap.wsdl\_cache](soap.configuration.md#ini.soap.wsdl-cache) de configuração ou a opção `wsdl_cache` para [SoapClient::\_\_construct()](soapclient.construct.md) e [SoapServer::\_\_construct()](soapserver.construct.md). |
| **`WSDL_CACHE_MEMORY`** ([int](language.types.integer.md)) | 2 | Especifica o uso do cache WSDL na memória somente quando usado na opção [soap.wsdl\_cache](soap.configuration.md#ini.soap.wsdl-cache) de configuração ou a opção `wsdl_cache` para [SoapClient::\_\_construct()](soapclient.construct.md) e [SoapServer::\_\_construct()](soapserver.construct.md). |
| **`WSDL_CACHE_BOTH`** ([int](language.types.integer.md)) | 3 | Especifica o uso de caches WSDL em disco e na memória quando usados na opção [soap.wsdl\_cache](soap.configuration.md#ini.soap.wsdl-cache) de configuração ou a opção `wsdl_cache` para [SoapClient::\_\_construct()](soapclient.construct.md) e [SoapServer::\_\_construct()](soapserver.construct.md). |

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
