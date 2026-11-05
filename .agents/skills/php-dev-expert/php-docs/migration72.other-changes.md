# Outras alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration72.other-changes.php

---

## Outras alterações

### Localização de [utf8\_encode()](function.utf8-encode.md) e [utf8\_decode()](function.utf8-decode.md)

As funções [utf8\_encode()](function.utf8-encode.md) e [utf8\_decode()](function.utf8-decode.md)
foram movidas para a extensão padrão como funções string, anteriormente
a extensão [XML](book.xml.md) era requerida para que elas estivessem disponíveis.

### Alterações a [mail()](function.mail.md) e [mb\_send\_mail()](function.mb-send-mail.md)

O parâmetro $additional\_headers de [mail()](function.mail.md) e
[mb\_send\_mail()](function.mb-send-mail.md) agora aceita um [array](language.types.array.md)
ao invés de uma [string](language.types.string.md).

### Suporte a LMDB

A extensão [DBA](book.dba.md) agora tem suporte a LMDB.

### Alterações ao sistema de construção do PHP

- Unix: Autoconf 2.64 ou superior agora é requerido para construir o PHP.
- Unix: o argumento de configuração `--with-pdo-oci` não precisa mais
  do número da versão do Oracle Instant Client.
- Unix: o argumento de configuração`--enable-gd-native-ttf` foi
  removido. Não era usado desde o PHP 5.5.0.
- Windows: o argumento de configuração`--with-config-profile` foi
  adicionado. Ele pode ser usado para salvar perfis de configuração específicos, bem parecido com o
  arquivo mágico config.nice.bat.

### Alterações à extensão [GD](book.image.md)

- [imageantialias()](function.imageantialias.md) agora também está disponível se compilada com
  uma biblioteca libgd de sistema.
- [imagegd()](function.imagegd.md) armazena imagens truecolor como verdadeiras imagens
  truecolor. Anteriormente, elas eram convertidas para palette.

### Movendo [MCrypt](book.mcrypt.md) para PECL

A extensão [MCrypt](book.mcrypt.md) agora foi movida de dentro
do núcleo do PHP para a PECL. Dado que a biblioteca mcrypt não tem visto nenhuma atualização
desde 2007, seu uso é altamente desencorajado. Ao invés dela, as extensões
[OpenSSL](book.openssl.md) ou [Sodium](book.sodium.md)
podem ser usadas.

### [session\_module\_name()](function.session-module-name.md)

Passar `"user"` para a função [session\_module\_name()](function.session-module-name.md)
agora emite um erro de nível **`E_RECOVERABLE_ERROR`**. Anteriormente,
isto era silenciosamente ignorado.

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
