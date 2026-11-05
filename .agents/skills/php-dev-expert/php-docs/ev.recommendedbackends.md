# Retorna uma máscara de bits de backends recomendados para a
  plataforma atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.recommendedbackends.php

---

# Ev::recommendedBackends

(PECL ev >= 0.2.0)

Ev::recommendedBackends — Retorna uma máscara de bits de backends recomendados para a
plataforma atual

### Descrição

final
public
static
function **Ev::recommendedBackends**(): [int](language.types.integer.md)

Retorna o conjunto de todos os backend compilados neste binário de
`libev`
e também recomendados para esta plataforma, o que significa que irá funcionar para a maioria dos
tipos de descritores de arquivo. Este conjunto é frequentemente menor que o retornado por
**ev\_supported\_backends()**,
como por exemplo,
`kqueue`
fica quebrado na maioria dos sistemas
`BSD`
e não será auto-detectado a menos que seja quererido explicitamente.
Este é o conjunto de backends que
`libev` irá sondar,
quando não houver backends especificados explicitamente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma máscara de bits que pode conter
[opções de backend](class.ev.md#ev.constants.watcher-backends)
combinadas usando operação
*OR*
binária.

### Examples

**Exemplo #1 Incorporando um laço em outro**

```
<?php
/*
* Tenta obter um laço de evento incorporável e incorporá-lo no
* laço de evento padrão. Se for impossível, usa o laço padrão.
* O laço padrão é armazenado em $loop_hi, enquanto o laço incorporável
* é armazenado em $loop_lo (que é $loop_hi no caso de nenhum laço
* incorporável poder ser usado).
*
* Exemplo traduzido para PHP de
* http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#Examples_CONTENT-9
*/
$loop_hi = EvLoop::defaultLoop();
$loop_lo = NULL;
$embed   = NULL;

/*
* Vê se há uma chance de conseguir um que funcione
* (o valor 0 da opção significa autodetecção)
*/
$loop_lo = Ev::embeddableBackends() & Ev::recommendedBackends()
    ? new EvLoop(Ev::embeddableBackends() & Ev::recommendedBackends())
    : 0;

if ($loop_lo) {
    $embed = new EvEmbed($loop_lo, function () {});
} else {
    $loop_lo = $loop_hi;
}
?>
```

### Veja também

- [EvEmbed](class.evembed.md)
- [Ev::embeddableBackends()](ev.embeddablebackends.md) - Retorna o conjunto de backends que podem ser incorporados em outros laços de eventos
- [Ev::supportedBackends()](ev.supportedbackends.md) - Retorna o conjunto de backends suportados pela configuração atual
  do libev
- [Opções de backend](class.ev.md#ev.constants.watcher-backends)
- [Exemplos](ev.examples.md)

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
