# Constantes Mágicas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.constants.magic.php

---

## Constantes Mágicas

Existem algumas constantes mágicas que mudam dependendo de
onde são usadas. Por exemplo, o valor de
**`__LINE__`** depende da linha em que é
usada no script. Todas essas constantes "mágicas" são resolvidas
em tempo de compilação, ao contrário das constantes regulares, que são resolvidas em tempo de execução.
Essas constantes especiais não diferenciam maiúsculas de minúsculas e são as seguintes:

**Constantes Mágicas do PHP**

| Nome | Descrição |
| --- | --- |
| **`__LINE__`** | O número da linha atual do arquivo. |
| **`__FILE__`** | O caminho completo e o nome do arquivo com links simbólicos resolvidos. Se usada dentro de um include, o nome do arquivo incluído será retornado. |
| **`__DIR__`** | O diretório do arquivo. Se usada dentro de um include, o diretório do arquivo incluído será retornado. Isso é equivalente a `dirname(__FILE__)`. O nome do diretório não possui barra no final, a menos que seja o diretório raiz. |
| **`__FUNCTION__`** | O nome da função ou `{closure}` para funções anônimas. |
| **`__CLASS__`** | O nome da classe. O nome da classe inclui o namespace em que foi declarada (por exemplo, `Foo\Bar`). Quando usada dentro de um método de trait, **`__CLASS__`** é o nome da classe em que o trait for usado. |
| **`__TRAIT__`** | O nome do trait. O nome do trait inclui o namespace em que foi declarado (por exemplo, `Foo\Bar`). |
| **`__METHOD__`** | O nome do método da classe. |
| **`__PROPERTY__`** | Válido somente dentro de um [gancho de propriedade](language.oop5.property-hooks.md). É igual ao nome da propriedade. |
| **`__NAMESPACE__`** | O nome do namespace atual. |
| **`ClassName::class`** | O nome totalmente qualificado da classe. |

### Veja também

- [::class](language.oop5.basic.md#language.oop5.basic.class.class)
- [get\_class()](function.get-class.md)
- [get\_object\_vars()](function.get-object-vars.md)
- [file\_exists()](function.file-exists.md)
- [function\_exists()](function.function-exists.md)

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
