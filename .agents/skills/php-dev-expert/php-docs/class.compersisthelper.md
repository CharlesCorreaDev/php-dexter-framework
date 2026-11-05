# A classe COMPersistHelper

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.compersisthelper.php

---

# A classe COMPersistHelper

(PHP 5, PHP 7, PHP 8)

## Introdução

**COMPersistHelper** melhora a interoperabilidade do COM
e do PHP em relação à diretiva [open\_basedir](ini.core.md#ini.open-basedir) do php.ini,
e a [resource](language.types.resource.md)s de fluxo.

## Resumo da classe

final
class ****COMPersistHelper****
{

/\* Métodos \*/

public function [\_\_construct](compersisthelper.construct.md)([?](language.types.null.md)[variant](class.variant.md) `$variant` = **`null`**)

public function [GetCurFileName](compersisthelper.getcurfilename.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [GetMaxStreamSize](compersisthelper.getmaxstreamsize.md)(): [int](language.types.integer.md)

public function [InitNew](compersisthelper.initnew.md)(): [bool](language.types.boolean.md)

public function [LoadFromFile](compersisthelper.loadfromfile.md)([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

public function [LoadFromStream](compersisthelper.loadfromstream.md)([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

public function [SaveToFile](compersisthelper.savetofile.md)([?](language.types.null.md)[string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$remember` = **`true`**): [bool](language.types.boolean.md)

public function [SaveToStream](compersisthelper.savetostream.md)([resource](language.types.resource.md) `$stream`): [bool](language.types.boolean.md)

}

## Índice

- [COMPersistHelper::\_\_construct](compersisthelper.construct.md) — Constrói um objeto COMPersistHelper
- [COMPersistHelper::GetCurFileName](compersisthelper.getcurfilename.md) — Obtém o nome do arquivo atual
- [COMPersistHelper::GetMaxStreamSize](compersisthelper.getmaxstreamsize.md) — Obtém o tamanho máximo do fluxo
- [COMPersistHelper::InitNew](compersisthelper.initnew.md) — Inicializa o objeto no estado padrão
- [COMPersistHelper::LoadFromFile](compersisthelper.loadfromfile.md) — Carrega objeto de um arquivo
- [COMPersistHelper::LoadFromStream](compersisthelper.loadfromstream.md) — Carrega objeto a partir de um fluxo
- [COMPersistHelper::SaveToFile](compersisthelper.savetofile.md) — Grava o objeto em um arquivo
- [COMPersistHelper::SaveToStream](compersisthelper.savetostream.md) — Grava o objeto no fluxo

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
