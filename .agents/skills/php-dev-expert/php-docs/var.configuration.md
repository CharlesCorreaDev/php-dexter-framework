# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/var.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Variáveis**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func) | **`null`** | **`INI_ALL`** |  |
| [unserialize\_max\_depth](var.configuration.md#ini.unserialize-max-depth) | "4096" | **`INI_ALL`** | Disponível a partir do PHP 7.4.0. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`unserialize_callback_func` [string](language.types.string.md)
:   A função de retorno é chamada quando a função [unserialize()](function.unserialize.md)
    tentar utilizar uma classe indefinida. Um aviso aparecerá se a função
    de retorno especificada não estiver definida, ou se a função de retorno falhar ao
    definir a classe ausente.

    Veja também [unserialize()](function.unserialize.md) e [Autoloading de Classes](language.oop5.autoload.md).

`unserialize_max_depth` [int](language.types.integer.md)
:   A profundidade máxima de estruturas permitida durante a desserialização ao
    usar [unserialize()](function.unserialize.md), com a intenção de evitar sobrecargas
    de pilha. Este limite pode ser desativado definindo
    `unserialize_max_depth=0`.

    Veja também [unserialize()](function.unserialize.md) e [Autoloading de Classes](language.oop5.autoload.md).

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
