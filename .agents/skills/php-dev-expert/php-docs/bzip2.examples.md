# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bzip2.examples.php

---

# Examples

Este exemplo abre um arquivo temporário e escreve uma string de teste
nele, e então mostra o conteúdo do arquivo.

**Exemplo #1 Um exemplo simples de bzip2**

```
<?php

$filename = "/tmp/testfile.bz2";
$str = "Este é um texto de teste.\n";

// abre o arquivo para escrita
$bz = bzopen($filename, "w");

// escreve string no arquivo
bzwrite($bz, $str);

// fecha o arquivo
bzclose($bz);

// abre o arquivo para leitura
$bz = bzopen($filename, "r");

// lê 10 caracteres
echo bzread($bz, 10);

// exibe até o final do arquivo (ou os próximos 1024 caracteres) e o fecha.
echo bzread($bz);

bzclose($bz);

?>
```

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
