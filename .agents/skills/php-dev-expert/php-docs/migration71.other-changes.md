# Outras alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration71.other-changes.php

---

## Outras alterações

### Avisos e alertas em aritmética com strings inválidas

Novos erros de nível **`E_WARNING`** e **`E_NOTICE`**
foram introduzidos para quando strings inválidas forem convertidas à força usando operadores
que esperam por números (`+` `-`
`*` `/` `**`
`%` `<<` `>>`
`|` `&` `^`) ou seus
equivalentes de atribuição. Um **`E_NOTICE`** é emitido quando a
string começa com um valor numérico mas contém caracteres não numéricos
no final, e um **`E_WARNING`** é emitido quando a string
não contém um valor numérico.

```
<?php
'1b' + 'something';
```

O exemplo acima produzirá:

```
Notice: A non well formed numeric value encountered in %s on line %d
Warning: A non-numeric value encountered in %s on line %d
```

### Alerta em sobrecarga de sequência de escape octal

Anteriormente, sequências de escape de string octal com 3 octetos iriam transbordar silenciosamente.
Agora, eles ainda transbordam, mas um **`E_WARNING`** será
emitido.

```
<?php
var_dump("\500");
```

O exemplo acima produzirá:

```
Warning: Octal escape sequence overflow \500 is greater than \377 in %s on line %d
string(1) "@"
```

### Correções de inconsistências para `$this`

Mesmo que `$this` seja considerada uma variável especial no PHP, faltava
a ela verificações adequadas para garantir que não fosse usada como nome de variável ou
reatribuída. Isto agora foi retificado para garantir que
`$this` não possa ser uma variável definida pelo usuário, não possa ser reatribuída a um
valor diferente, e nem possa ser globalizada.

### Geração de ID de sessão sem hash

IDs de sessão não irão mais sofrer hash em sua geração. Esta alteração
também resulta na remoção destas quatro configurações ini:

- `session.entropy_file`
- `session.entropy_length`
- `session.hash_function`
- `session.hash_bits_per_character`

E na adição das duas configurações a seguir:

- `session.sid_length` - define o comprimento do
  ID de sessão, com padrão de 32 caracteres para retro-compatibilidade)
- `session.sid_bits_per_character` - define o número de
  bits armazenados por caractere (isto é, aumenta a faixa de caracteres
  que podem ser usados no ID de sessão), com padrão de 4 para
  retro-compatibilidade.

### Alterações na manipulação de arquivo INI

`precision`
:   Se o valor for definido para -1, o dtoa modo 0 é usado. O padrão
    ainda é 14.

`serialize_precision`
:   Se o valor for definido para -1, o dtoa modo 0 é usado. O valor -1 agora
    é usado por padrão.

`gd.jpeg_ignore_warning`
:   O padrão desta configuração do php.ini foi alterado para 1, portanto por
    padrão os alertas da libjpeg são ignorados.

`opcache.enable_cli`
:   O padrão desta configuração do php.ini foi alterado para 1
    (habilitado) no PHP 7.1.2, e de volta para 0 (desabilitado) no PHP 7.1.7.

### Geração de ID de sessão com um CSPRNG somente

IDs de sessão agora serão gerados somente com um CSPRNG (gerador de número pseudo-randômico criptograficamente seguro).

### Mensagens de [TypeError](class.typeerror.md) mais informativas quando **`null`** é permitido

Exceções [TypeError](class.typeerror.md) para verificações de tipo arg\_info irão
agora fornecer mensagens de erro mais informativas. Se o tipo do parâmetro ou do retorno
aceitar **`null`** (por ter um valor padrão de **`null`** ou por ser um tipo
anulável), o texto do erro agora mencionará isto com uma mensagem
de "must be ... or null" ou "must ... or be null."

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
