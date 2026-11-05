# Cifras de Mcrypt

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mcrypt.ciphers.php

---

# Cifras de Mcrypt

Aqui está uma lista de cifras que são atualmente suportadas pela
extensão mcrypt. Para uma lista completa de cifras suportadas, consulte as definições no
final do arquivo mcrypt.h. A regra geral com a
API mcrypt-2.2.x é que a cifra pode ser acessada no PHP com
MCRYPT\_ciphername. Com as APIs libmcrypt-2.4.x e libmcrypt-2.5.x, essas constantes também funcionam,
mas é possível especificar o nome da cifra como uma string com uma
chamada a [mcrypt\_module\_open()](function.mcrypt-module-open.md).

- MCRYPT\_3DES
- MCRYPT\_ARCFOUR\_IV (libmcrypt > 2.4.x somente)
- MCRYPT\_ARCFOUR (libmcrypt > 2.4.x somente)
- MCRYPT\_BLOWFISH
- MCRYPT\_CAST\_128
- MCRYPT\_CAST\_256
- MCRYPT\_CRYPT
- MCRYPT\_DES
- MCRYPT\_DES\_COMPAT (libmcrypt 2.2.x somente)
- MCRYPT\_ENIGMA (libmcrypt > 2.4.x somente, alias para MCRYPT\_CRYPT)
- MCRYPT\_GOST
- MCRYPT\_IDEA (não-livre)
- MCRYPT\_LOKI97 (libmcrypt > 2.4.x somente)
- MCRYPT\_MARS (libmcrypt > 2.4.x somente, não-livre)
- MCRYPT\_PANAMA (libmcrypt > 2.4.x somente)
- MCRYPT\_RIJNDAEL\_128 (libmcrypt > 2.4.x somente)
- MCRYPT\_RIJNDAEL\_192 (libmcrypt > 2.4.x somente)
- MCRYPT\_RIJNDAEL\_256 (libmcrypt > 2.4.x somente)
- MCRYPT\_RC2
- MCRYPT\_RC4 (libmcrypt 2.2.x somente)
- MCRYPT\_RC6 (libmcrypt > 2.4.x somente)
- MCRYPT\_RC6\_128 (libmcrypt 2.2.x somente)
- MCRYPT\_RC6\_192 (libmcrypt 2.2.x somente)
- MCRYPT\_RC6\_256 (libmcrypt 2.2.x somente)
- MCRYPT\_SAFER64
- MCRYPT\_SAFER128
- MCRYPT\_SAFERPLUS (libmcrypt > 2.4.x somente)
- MCRYPT\_SERPENT(libmcrypt > 2.4.x somente)
- MCRYPT\_SERPENT\_128 (libmcrypt 2.2.x somente)
- MCRYPT\_SERPENT\_192 (libmcrypt 2.2.x somente)
- MCRYPT\_SERPENT\_256 (libmcrypt 2.2.x somente)
- MCRYPT\_SKIPJACK (libmcrypt > 2.4.x somente)
- MCRYPT\_TEAN (libmcrypt 2.2.x somente)
- MCRYPT\_THREEWAY
- MCRYPT\_TRIPLEDES (libmcrypt > 2.4.x somente)
- MCRYPT\_TWOFISH (para versões antigas do mcrypt 2.x ou mcrypt > 2.4.x)
- MCRYPT\_TWOFISH128 (TWOFISHxxx estão disponíveis em versões mais recentes 2.x versions, mas não nas versões 2.4.x)
- MCRYPT\_TWOFISH192
- MCRYPT\_TWOFISH256
- MCRYPT\_WAKE (libmcrypt > 2.4.x somente)
- MCRYPT\_XTEA (libmcrypt > 2.4.x somente)

É obrigatório (nos modos **`CFB`** e **`OFB`**)
ou opcional (no modo **`CBC`**) fornecer um
vetor de inicialização (IV) para a função de criptografia respectiva. O
IV deve ser único e deve ser o mesmo ao
descriptografar/criptografar. Com dados que são armazenados criptografados,
pode-se pegar a saída de uma função do índice sob o qual o
dados são armazenados (por exemplo, a chave MD5 do nome do arquivo).
Alternativamente, pode-se transmitir o IV junto com os dados criptografados
(consulte o capítulo 9.3 de Applied Cryptography by Schneier (ISBN 0-471-11709-9) para uma
discussão sobre esse tópico).

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
