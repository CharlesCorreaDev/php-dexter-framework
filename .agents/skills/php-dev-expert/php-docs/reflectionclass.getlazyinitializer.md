# Obtém o inicializador lento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.getlazyinitializer.php

---

# ReflectionClass::getLazyInitializer

(PHP 8 >= 8.4.0)

ReflectionClass::getLazyInitializer — Obtém o inicializador lento

### Descrição

public function **ReflectionClass::getLazyInitializer**([object](language.types.object.md) `$object`): [?](language.types.null.md)[callable](language.types.callable.md)

Obtém o inicializador lento ou fábrica anexada ao objeto informado em
`object`.

### Parâmetros

`object`
:   O objeto do qual o inicializador será obtido.

### Valor Retornado

Retorna o inicializador se o objeto for um objeto lento não inicializado,
**`null`** caso contrário.

### Veja também

- [Objetos lentos](language.oop5.lazy-objects.md)
- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md) - Cria uma nova instância de fantasma lento

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
