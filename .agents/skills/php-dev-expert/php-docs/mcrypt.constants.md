# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mcrypt.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

Mcrypt pode operar em quatro modos de cifra de bloco (`CBC`,
`OFB`, `CFB` e
`ECB`). Se vinculado à libmcrypt-2.4.x ou superior, as
funções também podem operar no modo de cifra de bloco `nOFB`
e no modo `STREAM`. Abaixo você encontra uma lista com todos
modos de criptografia suportados juntamente com as constantes que são
definidas para o modo de criptografia. Para uma referência mais completa e
discussão, consulte Applied Cryptography by Schneier (ISBN 0-471-11709-9).

- **`MCRYPT_MODE_ECB`** (`electronic
  codebook`) é um modo de cifra de bloco geralmente
  inadequado para a maioria dos propósitos. O uso deste modo não é recomendado.
- **`MCRYPT_MODE_CBC`** (`cipher block
  chaining`) é um modo de cifra de bloco significativamente
  mais seguro do que o modo `ECB`.
- **`MCRYPT_MODE_CFB`** (`cipher
  feedback, em modo de 8 bits`) é um modo de cifra de fluxo.
  É recomendado usar o modo `NCFB` em vez de
  modo `CFB`.
- **`MCRYPT_MODE_OFB`** (`output feedback, em
  modo de 8 bits`) é um modo de cifra de fluxo comparável a `CFB`, mas
  pode ser usado em aplicações onde a propagação de erros não pode
  ser tolerada.
  Recomenda-se usar o modo `NOFB` em vez de
  modo `OFB`.
- **`MCRYPT_MODE_NOFB`** (`output feedback,
  em modo n-bit`) é comparável ao modo `OFB`,
  mas opera no tamanho completo do bloco do algoritmo.
- **`MCRYPT_MODE_STREAM`** é um modo extra para incluir
  alguns algoritmos de fluxo como `"WAKE"` ou `"RC4"`.

Mcrypt suporta alguns outros modos de operação para os quais não existem constantes predefinidas.
Eles podem ser utilizados passando uma string no lugar das constantes ausentes.

- `"ctr"` (`counter mode`) é um modo de cifra de fluxo.
- `"ncfb"` (`cipher feedback,
  em modo n-bit`) é comparável ao modo `CFB`,
  mas opera no tamanho completo do bloco do algoritmo.

Algumas outras constantes de modo e dispositivo aleatório:

**`MCRYPT_ENCRYPT`** ([int](language.types.integer.md))

**`MCRYPT_DECRYPT`** ([int](language.types.integer.md))

**`MCRYPT_DEV_RANDOM`** ([int](language.types.integer.md))

**`MCRYPT_DEV_URANDOM`** ([int](language.types.integer.md))

**`MCRYPT_RAND`** ([int](language.types.integer.md))

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
