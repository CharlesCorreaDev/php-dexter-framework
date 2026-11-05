# Envia alterações da cópia de trabalho local para o repositório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-commit.php

---

# svn\_commit

(PECL svn >= 0.1.0)

svn\_commit — Envia alterações da cópia de trabalho local para o repositório

### Descrição

function **svn\_commit**([string](language.types.string.md) `$log`, [array](language.types.array.md) `$targets`, [bool](language.types.boolean.md) `$recursive` = **`true`**): [array](language.types.array.md)

Confirma as alterações feitas nos arquivos da cópia de trabalho local enumerados
no array `targets` para o repositório, com a
mensagem de log `log`. Os diretórios no array `targets`
serão confirmados recursivamente, a menos que `recursive`
esteja definido como **`false`**.

> **Nota**:
>
> Esta função não possui parâmetros para especificar autenticação,
> portanto, um nome de usuário e uma senha devem ser definidos usando [svn\_auth\_set\_parameter()](function.svn-auth-set-parameter.md).

### Parâmetros

`log`
:   String com texto de registro para envio.

`targets`
:   Array de caminhos locais de arquivos para envio.

    **Aviso**

    Este parâmetro deve ser um array; uma string para um único
    arquivo não é aceitável.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

`recursive`
:   Sinalizador booleano para desabilitar a confirmação recursiva de
    diretórios no array `targets`.
    O padrão é **`true`**.

### Valor Retornado

Retorna um array no formato de:

```
array(
    0 => número inteiro de revisão do envio (commit)
    1 => string com data e horário do envio conforme ISO 8601
    2 => nome do usuário que fez o envio
)
```

Retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo básico**

Este exemplo envia o diretório 'calculator' para um repositório, usando
o nome de usuário 'Bob' e a senha 'abc123' (espero que a senha dele seja
mais forte):

```
<?php
svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_USERNAME, 'Bob');
svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_PASSWORD, 'abc123');
var_dump(svn_commit('Log message of Bob\'s commit', array(realpath('calculator'))));
?>
```

O exemplo acima produzirá:

```
array(
  0 => 1415,
  1 => '2007-05-26T01:44:28.453125Z',
  2 => 'Bob'
)
```

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- [svn\_auth\_set\_parameter()](function.svn-auth-set-parameter.md) - Define um parâmetro de autenticação
- [» Documentação do SVN sobre svn commit](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.commit.html)

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
