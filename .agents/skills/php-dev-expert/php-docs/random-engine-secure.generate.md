# Gera aleatoriedade criptograficamente segura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-engine-secure.generate.php

---

# Random\Engine\Secure::generate

(PHP 8 >= 8.2.0)

Random\Engine\Secure::generate — Gera aleatoriedade criptograficamente segura

### Descrição

public function **Random\Engine\Secure::generate**(): [string](language.types.string.md)

Retorna aleatoriedade criptograficamente segura.

As fontes de aleatoriedade usadas para esta função são as seguintes:

- Linux: [» getrandom()](https://man7.org/linux/man-pages/man2/getrandom.2.html), /dev/urandom
- FreeBSD >= 12 (PHP >= 7.3): [» getrandom()](https://man7.org/linux/man-pages/man2/getrandom.2.html), /dev/urandom
- Windows (PHP >= 7.2): [» CNG-API](https://docs.microsoft.com/en-us/windows/desktop/SecCNG/cng-portal)

  Windows: [» CryptGenRandom](https://msdn.microsoft.com/en-us/library/windows/desktop/aa379942(v=vs.85).aspx)
- macOS (PHP >= 8.2; >= 8.1.9; >= 8.0.22 se CCRandomGenerateBytes estiver disponível em tempo de compilação): CCRandomGenerateBytes()

  macOS (PHP >= 8.1; >= 8.0.2): arc4random\_buf(), /dev/urandom
- NetBSD >= 7 (PHP >= 7.1; >= 7.0.1): arc4random\_buf(), /dev/urandom
- OpenBSD >= 5.5 (PHP >= 7.1; >= 7.0.1): arc4random\_buf(), /dev/urandom
- DragonflyBSD (PHP >= 8.1): [» getrandom()](https://man7.org/linux/man-pages/man2/getrandom.2.html), /dev/urandom
- Solaris (PHP >= 8.1): [» getrandom()](https://man7.org/linux/man-pages/man2/getrandom.2.html), /dev/urandom
- Qualquer combinação de sistema operacional e versão do PHP não mencionada anteriormente: /dev/urandom
- Se nenhuma das fontes estiver disponível ou todas falharem em gerar
  aleatoriedade, então uma exceção [Random\RandomException](class.random-randomexception.md)
  será lançada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma string contendo **`PHP_INT_SIZE`** bytes aleatórios seguros criptograficamente.

### Erros/Exceções

- Se uma fonte apropriada de aleatoriedade não puder ser encontrada,
  uma exceção [Random\RandomException](class.random-randomexception.md) será lançada.

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
