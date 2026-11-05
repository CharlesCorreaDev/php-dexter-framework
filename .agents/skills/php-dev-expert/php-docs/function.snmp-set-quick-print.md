# Define o valor de enable dentro da biblioteca NET-SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp-set-quick-print.php

---

# snmp\_set\_quick\_print

(PHP 4, PHP 5, PHP 7, PHP 8)

snmp\_set\_quick\_print — Define o valor de `enable` dentro da biblioteca NET-SNMP

### Descrição

function **snmp\_set\_quick\_print**([bool](language.types.boolean.md) `$enable`): [true](language.types.singleton.md)

Define o valor de `enable` na biblioteca NET-SNMP. Quando este parâmetro
estiver definido (1), a biblioteca SNMP retornará valores de 'impressão rápida'. Isso
significa que apenas o valor será impresso. Quando `enable` não estiver
habilitado (padrão), a biblioteca NET-SNMP imprime informações extras,
incluindo o tipo do valor (por exemplo, Endereço IP ou OID). Além disso,
se quick\_print não estiver habilitado, a biblioteca imprime valores hexadecimais adicionais
para todas as strings de três caracteres ou menos.

Por padrão, a biblioteca NET-SNMP retorna valores detalhados; quick\_print é
usado para retornar apenas o valor.

Atualmente, as strings ainda são retornadas com aspas extras. Isso será
corrigido em uma versão posterior.

### Parâmetros

`enable`

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

A configuração quick\_print é frequentemente usada ao usar as informações retornadas
em vez de exibi-las.

**Exemplo #1 Usando **snmp\_set\_quick\_print()****

```
<?php
snmp_set_quick_print(0);
$a = snmpget("127.0.0.1", "public", ".1.3.6.1.2.1.2.2.1.9.1");
echo "$a\n";
snmp_set_quick_print(1);
$a = snmpget("127.0.0.1", "public", ".1.3.6.1.2.1.2.2.1.9.1");
echo "$a\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
'Timeticks: (0) 0:00:00.00'
'0:00:00.00'
```

### Veja também

- [snmp\_get\_quick\_print()](function.snmp-get-quick-print.md) - Busca o valor atual da configuração quick\_print da biblioteca NET-SNMP

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
