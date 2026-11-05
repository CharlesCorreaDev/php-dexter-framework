# Retorna os valores detectados mais recentemente por Ev

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evstat.attr.php

---

# EvStat::attr

(PECL ev >= 0.2.0)

EvStat::attr — Retorna os valores detectados mais recentemente por Ev

### Descrição

public
function **EvStat::attr**(): [array](language.types.array.md)

Retorna uma array dos valores detectados mais recentemente por Ev.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma array com os valores detectados mais recentemente por Ev (sem
usar
`stat`):

**Lista das chaves do array retornado por **EvStat::attr()****

| Chave | Descrição |
| --- | --- |
| `'dev'` | ID do dispositivo contendo o arquivo |
| `'ino'` | número do i-node |
| `'mode'` | proteção |
| `'nlink'` | número de ligações físicas |
| `'uid'` | ID de usuário do proprietário |
| `'size'` | tamanho total em bytes |
| `'gid'` | ID de grupo do proprietário |
| `'rdev'` | ID do dispositivo (no caso de arquivo especial) |
| `'blksize'` | tamanho do bloco para E/S do sistema de arquivos |
| `'blocks'` | número de blocos de 512 bytes alocados |
| `'atime'` | horário do último acesso |
| `'ctime'` | horário da última alteração de status |
| `'mtime'` | horário da última modificação |

Consulte o manual de
`stat(2)`
para detalhes.

### Examples

**Exemplo #1 Monitorando alterações em /var/log/messages**

```
<?php
// Usa intervalo de atualização de 10 segundos.
$w = new EvStat("/var/log/messages", 8, function ($w) {
    echo "/var/log/messages alterado\n";

    $attr = $w->attr();

    if ($attr['nlink']) {
        printf("Tamanho atual: %ld\n", $attr['size']);
        printf("Horário de acesso: %ld\n", $attr['atime']);
        printf("Horário de modificação: %ld\n", $attr['mtime']);
    } else {
        fprintf(STDERR, "arquivo `messages` inexistente!");
        $w->stop();
    }
});

Ev::run();
?>
```

### Veja também

- [EvStat::prev()](evstat.prev.md) - Retorna o conjunto anterior de valores retornados por EvStat::attr
- [EvStat::stat()](evstat.stat.md) - Inicia a chamada stat

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
