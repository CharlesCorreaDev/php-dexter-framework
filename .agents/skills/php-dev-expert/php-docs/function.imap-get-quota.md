# Recupera as configurações de nível de cota e estatísticas de uso por caixa de correio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-get-quota.php

---

# imap\_get\_quota

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

imap\_get\_quota — Recupera as configurações de nível de cota e estatísticas de uso por caixa de correio

### Descrição

function **imap\_get\_quota**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$quota_root`): [array](language.types.array.md)|[false](language.types.singleton.md)

Recupera as configurações de nível de cota e estatísticas de uso por caixa de correio.

Para uma versão desta função para usuários não administradores,
consulte a função [imap\_get\_quotaroot()](function.imap-get-quotaroot.md) do PHP.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`quota_root`
:   `quota_root` normalmente deve estar no formato de
    `user.name` onde name é a caixa de correio sobre a qual se deseja
    recuperar informações.

### Valor Retornado

Retorna um array com valores inteiros de limite ("limit") e uso ("usage") para a caixa de correio
fornecida. O valor de limite representa a quantidade total de espaço
permitida para esta caixa de correio. O valor de uso representa o nível atual de capacidade da caixa de correio.
Retornará **`false`** em caso de falha.

A partir do PHP 4.3, a função reflete mais adequadamente a
funcionalidade conforme ditado pela [» RFC2087](https://datatracker.ietf.org/doc/html/rfc2087).
O valor de retorno do array foi alterado para suportar um número ilimitado de
recursos retornados (por exemplo, mensagens ou subpastas) com cada recurso nomeado recebendo
uma chave de array individual. Cada valor de chave contém então um outro array com
os valores de uso e limite dentro dele.

Por razões de compatibilidade com versões anteriores, os métodos de acesso originais ainda estão
disponíveis para uso, embora seja sugerido atualizá-los.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **imap\_get\_quota()****

```
<?php
$mbox = imap_open("{imap.example.org}", "mailadmin", "password", OP_HALFOPEN)
      or die("Não foi possível conectar: " . imap_last_error());

$quota_value = imap_get_quota($mbox, "user.kalowsky");
if (is_array($quota_value)) {
    echo "Nível de uso é: " . $quota_value['usage'];
    echo "Nível de limite é: " . $quota_value['limit'];
}

imap_close($mbox);
?>
```

**Exemplo #2 Exemplo de **imap\_get\_quota()** para versão 4.3 ou superior**

```
<?php
$mbox = imap_open("{imap.example.org}", "mailadmin", "password", OP_HALFOPEN)
      or die("Não foi possível conectar: " . imap_last_error());

$quota_values = imap_get_quota($mbox, "user.kalowsky");
if (is_array($quota_values)) {
   $storage = $quota_values['STORAGE'];
   echo "Nível de uso STORAGE é: " .  $storage['usage'];
   echo "Nível de limite STORAGE é: " .  $storage['limit'];

   $message = $quota_values['MESSAGE'];
   echo "Nível de uso MESSAGE é: " .  $message['usage'];
   echo "Nível de limite MESSAGE é: " .  $message['limit'];

   /* ...  */
}

imap_close($mbox);
?>
```

### Notas

Esta função está disponível atualmente apenas para usuários da biblioteca c-client2000
ou superior.

O `imap` fornecido deve ser aberto como administrador de e-mail,
caso contrário, esta função falhará.

### Veja também

- [imap\_open()](function.imap-open.md) - Abre um fluxo IMAP para uma caixa de correio
- [imap\_set\_quota()](function.imap-set-quota.md) - Define uma cota para uma determinada caixa de correio
- [imap\_get\_quotaroot()](function.imap-get-quotaroot.md) - Recupera as configurações de cota por usuário

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
