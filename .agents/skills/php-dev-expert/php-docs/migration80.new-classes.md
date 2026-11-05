# Novas Classes e Interfaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration80.new-classes.php

---

## Novas Classes e Interfaces

### cURL

- [CurlHandle](class.curlhandle.md)
- [CurlMultiHandle](class.curlmultihandle.md)
- [CurlShareHandle](class.curlsharehandle.md)

### Enchant

- [EnchantBroker](class.enchantbroker.md)
- [EnchantDictionary](class.enchantdictionary.md)

### GD

- [GdImage](class.gdimage.md)

### OpenSSL

- [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)
- [OpenSSLCertificate](class.opensslcertificate.md)
- [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md)

### Shmop

- [Shmop](class.shmop.md)

### Sockets

- [AddressInfo](class.addressinfo.md)
- [Socket](class.socket.md)

### System V

- [SysvMessageQueue](class.sysvmessagequeue.md)
- [SysvSemaphore](class.sysvsemaphore.md)
- [SysvSharedMemory](class.sysvsharedmemory.md)

### XMLParser

- [XMLParser](class.xmlparser.md)

### XMLWriter

- [XMLWriter](class.xmlwriter.md)

### Zlib

- [DeflateContext](class.deflatecontext.md)
- [InflateContext](class.inflatecontext.md)

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
