# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svm.requirements.php

---

## Dependências

O libsvm em si é necessário e está disponível através de algum gerenciador de
pacotes - libsvm-devel para sistemas baseados em RPM ou libsvm-dev para
sistemas baseados em Debian. Alternativamente, ele está disponível diretamente no site.
Se estiver instalando a partir do [» site oficial](https://www.csie.ntu.edu.tw/~cjlin/libsvm),
algumas etapas precisarão ser seguidas, pois o pacote não é instalado
automaticamente. Por exemplo, supondo que a versão mais recente seja 3.1:

```
wget http://www.csie.ntu.edu.tw/~cjlin/cgi-bin/libsvm.cgi?+http://www.csie.ntu.edu.tw/~cjlin/libsvm+tar.gz
tar xvzf libsvm-3.1.tar.gz
cd libsvm-3.1
make lib
cp libsvm.so.1 /usr/lib
ln -s libsvm.so.1 libsvm.so
ldconfig
ldconfig --print | grep libsvm
```

Esta última etapa deve mostrar que o libsvm está instalado.

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
