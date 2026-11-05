# Novas funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.new-functions.php

---

## Novas funções

### [Closure](class.closure.md)

- [Closure::call()](closure.call.md)

### CSPRNG

- [random\_bytes()](function.random-bytes.md)
- [random\_int()](function.random-int.md)

### [Manipulação e Registro de erros](book.errorfunc.md)

- [error\_clear\_last()](function.error-clear-last.md)

### [Generator](class.generator.md)

- [Generator::getReturn()](generator.getreturn.md)

### [GNU Multiple Precision](book.gmp.md)

- [gmp\_random\_seed()](function.gmp-random-seed.md)

### [Math](book.math.md)

- [intdiv()](function.intdiv.md)

### [PCRE](book.pcre.md)

- [preg\_replace\_callback\_array()](function.preg-replace-callback-array.md)

### [Opções PHP/Informações](book.info.md)

- [gc\_mem\_caches()](function.gc-mem-caches.md)
- [get\_resources()](function.get-resources.md)

### [POSIX](book.posix.md)

- [posix\_setrlimit()](function.posix-setrlimit.md)

### [Reflection](book.reflection.md)

- [ReflectionParameter::getType()](reflectionparameter.gettype.md)
- [ReflectionParameter::hasType()](reflectionparameter.hastype.md)
- [ReflectionFunctionAbstract::getReturnType()](reflectionfunctionabstract.getreturntype.md)
- [ReflectionFunctionAbstract::hasReturnType()](reflectionfunctionabstract.hasreturntype.md)

### [Zip](book.zip.md)

- [ZipArchive::setCompressionIndex()](ziparchive.setcompressionindex.md)
- [ZipArchive::setCompressionName()](ziparchive.setcompressionname.md)

### [Compressão Zlib](book.zlib.md)

- [inflate\_add()](function.inflate-add.md)
- [deflate\_add()](function.deflate-add.md)
- [inflate\_init()](function.inflate-init.md)
- [deflate\_init()](function.deflate-init.md)

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
