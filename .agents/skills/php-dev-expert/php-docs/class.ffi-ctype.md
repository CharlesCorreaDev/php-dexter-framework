# Identificadores de Tipo em C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ffi-ctype.php

---

# Identificadores de Tipo em C

(PHP 7 >= 7.4.0, PHP 8)

## Introdução

## Resumo da classe

namespace **FFI**;

final
class ****CType****
{

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[TYPE\_VOID](class.ffi-ctype.md#ffi-ctype.constants.type-void);

public
const
[int](language.types.integer.md)
[TYPE\_FLOAT](class.ffi-ctype.md#ffi-ctype.constants.type-float);

public
const
[int](language.types.integer.md)
[TYPE\_DOUBLE](class.ffi-ctype.md#ffi-ctype.constants.type-double);

public
const
[int](language.types.integer.md)
[TYPE\_LONGDOUBLE](class.ffi-ctype.md#ffi-ctype.constants.type-longdouble);

public
const
[int](language.types.integer.md)
[TYPE\_UINT8](class.ffi-ctype.md#ffi-ctype.constants.type-uint8);

public
const
[int](language.types.integer.md)
[TYPE\_SINT8](class.ffi-ctype.md#ffi-ctype.constants.type-sint8);

public
const
[int](language.types.integer.md)
[TYPE\_UINT16](class.ffi-ctype.md#ffi-ctype.constants.type-uint16);

public
const
[int](language.types.integer.md)
[TYPE\_SINT16](class.ffi-ctype.md#ffi-ctype.constants.type-sint16);

public
const
[int](language.types.integer.md)
[TYPE\_UINT32](class.ffi-ctype.md#ffi-ctype.constants.type-uint32);

public
const
[int](language.types.integer.md)
[TYPE\_SINT32](class.ffi-ctype.md#ffi-ctype.constants.type-sint32);

public
const
[int](language.types.integer.md)
[TYPE\_UINT64](class.ffi-ctype.md#ffi-ctype.constants.type-uint64);

public
const
[int](language.types.integer.md)
[TYPE\_SINT64](class.ffi-ctype.md#ffi-ctype.constants.type-sint64);

public
const
[int](language.types.integer.md)
[TYPE\_ENUM](class.ffi-ctype.md#ffi-ctype.constants.type-enum);

public
const
[int](language.types.integer.md)
[TYPE\_BOOL](class.ffi-ctype.md#ffi-ctype.constants.type-bool);

public
const
[int](language.types.integer.md)
[TYPE\_CHAR](class.ffi-ctype.md#ffi-ctype.constants.type-char);

public
const
[int](language.types.integer.md)
[TYPE\_POINTER](class.ffi-ctype.md#ffi-ctype.constants.type-pointer);

public
const
[int](language.types.integer.md)
[TYPE\_FUNC](class.ffi-ctype.md#ffi-ctype.constants.type-func);

public
const
[int](language.types.integer.md)
[TYPE\_ARRAY](class.ffi-ctype.md#ffi-ctype.constants.type-array);

public
const
[int](language.types.integer.md)
[TYPE\_STRUCT](class.ffi-ctype.md#ffi-ctype.constants.type-struct);

public
const
[int](language.types.integer.md)
[ATTR\_CONST](class.ffi-ctype.md#ffi-ctype.constants.attr-const);

public
const
[int](language.types.integer.md)
[ATTR\_INCOMPLETE\_TAG](class.ffi-ctype.md#ffi-ctype.constants.attr-incomplete-tag);

public
const
[int](language.types.integer.md)
[ATTR\_VARIADIC](class.ffi-ctype.md#ffi-ctype.constants.attr-variadic);

public
const
[int](language.types.integer.md)
[ATTR\_INCOMPLETE\_ARRAY](class.ffi-ctype.md#ffi-ctype.constants.attr-incomplete-array);

public
const
[int](language.types.integer.md)
[ATTR\_VLA](class.ffi-ctype.md#ffi-ctype.constants.attr-vla);

public
const
[int](language.types.integer.md)
[ATTR\_UNION](class.ffi-ctype.md#ffi-ctype.constants.attr-union);

public
const
[int](language.types.integer.md)
[ATTR\_PACKED](class.ffi-ctype.md#ffi-ctype.constants.attr-packed);

public
const
[int](language.types.integer.md)
[ATTR\_MS\_STRUCT](class.ffi-ctype.md#ffi-ctype.constants.attr-ms-struct);

public
const
[int](language.types.integer.md)
[ATTR\_GCC\_STRUCT](class.ffi-ctype.md#ffi-ctype.constants.attr-gcc-struct);

public
const
[int](language.types.integer.md)
[ABI\_DEFAULT](class.ffi-ctype.md#ffi-ctype.constants.abi-default);

public
const
[int](language.types.integer.md)
[ABI\_CDECL](class.ffi-ctype.md#ffi-ctype.constants.abi-cdecl);

public
const
[int](language.types.integer.md)
[ABI\_FASTCALL](class.ffi-ctype.md#ffi-ctype.constants.abi-fastcall);

public
const
[int](language.types.integer.md)
[ABI\_THISCALL](class.ffi-ctype.md#ffi-ctype.constants.abi-thiscall);

public
const
[int](language.types.integer.md)
[ABI\_STDCALL](class.ffi-ctype.md#ffi-ctype.constants.abi-stdcall);

public
const
[int](language.types.integer.md)
[ABI\_PASCAL](class.ffi-ctype.md#ffi-ctype.constants.abi-pascal);

public
const
[int](language.types.integer.md)
[ABI\_REGISTER](class.ffi-ctype.md#ffi-ctype.constants.abi-register);

public
const
[int](language.types.integer.md)
[ABI\_MS](class.ffi-ctype.md#ffi-ctype.constants.abi-ms);

public
const
[int](language.types.integer.md)
[ABI\_SYSV](class.ffi-ctype.md#ffi-ctype.constants.abi-sysv);

public
const
[int](language.types.integer.md)
[ABI\_VECTORCALL](class.ffi-ctype.md#ffi-ctype.constants.abi-vectorcall);

/\* Métodos \*/

public function [getAlignment](ffi-ctype.getalignment.md)(): [int](language.types.integer.md)

public function [getArrayElementType](ffi-ctype.getarrayelementtype.md)(): [FFI\CType](class.ffi-ctype.md)

public function [getArrayLength](ffi-ctype.getarraylength.md)(): [int](language.types.integer.md)

public function [getAttributes](ffi-ctype.getattributes.md)(): [int](language.types.integer.md)

public function [getEnumKind](ffi-ctype.getenumkind.md)(): [int](language.types.integer.md)

public function [getFuncABI](ffi-ctype.getfuncabi.md)(): [int](language.types.integer.md)

public function [getFuncParameterCount](ffi-ctype.getfuncparametercount.md)(): [int](language.types.integer.md)

public function [getFuncParameterType](ffi-ctype.getfuncparametertype.md)([int](language.types.integer.md) `$index`): [FFI\CType](class.ffi-ctype.md)

public function [getFuncReturnType](ffi-ctype.getfuncreturntype.md)(): [FFI\CType](class.ffi-ctype.md)

public function [getKind](ffi-ctype.getkind.md)(): [int](language.types.integer.md)

public function [getName](ffi-ctype.getname.md)(): [string](language.types.string.md)

public function [getPointerType](ffi-ctype.getpointertype.md)(): [FFI\CType](class.ffi-ctype.md)

public function [getSize](ffi-ctype.getsize.md)(): [int](language.types.integer.md)

public function [getStructFieldNames](ffi-ctype.getstructfieldnames.md)(): [array](language.types.array.md)

public function [getStructFieldOffset](ffi-ctype.getstructfieldoffset.md)([string](language.types.string.md) `$name`): [int](language.types.integer.md)

public function [getStructFieldType](ffi-ctype.getstructfieldtype.md)([string](language.types.string.md) `$name`): [FFI\CType](class.ffi-ctype.md)

}

## Constantes predefinidas

**`FFI\CType::TYPE_VOID`**

**`FFI\CType::TYPE_FLOAT`**

**`FFI\CType::TYPE_DOUBLE`**

**`FFI\CType::TYPE_LONGDOUBLE`**

**`FFI\CType::TYPE_UINT8`**

**`FFI\CType::TYPE_SINT8`**

**`FFI\CType::TYPE_UINT16`**

**`FFI\CType::TYPE_SINT16`**

**`FFI\CType::TYPE_UINT32`**

**`FFI\CType::TYPE_SINT32`**

**`FFI\CType::TYPE_UINT64`**

**`FFI\CType::TYPE_SINT64`**

**`FFI\CType::TYPE_ENUM`**

**`FFI\CType::TYPE_BOOL`**

**`FFI\CType::TYPE_CHAR`**

**`FFI\CType::TYPE_POINTER`**

**`FFI\CType::TYPE_FUNC`**

**`FFI\CType::TYPE_ARRAY`**

**`FFI\CType::TYPE_STRUCT`**

**`FFI\CType::ATTR_CONST`**

**`FFI\CType::ATTR_INCOMPLETE_TAG`**

**`FFI\CType::ATTR_VARIADIC`**

**`FFI\CType::ATTR_INCOMPLETE_ARRAY`**

**`FFI\CType::ATTR_VLA`**

**`FFI\CType::ATTR_UNION`**

**`FFI\CType::ATTR_PACKED`**

**`FFI\CType::ATTR_MS_STRUCT`**

**`FFI\CType::ATTR_GCC_STRUCT`**

**`FFI\CType::ABI_DEFAULT`**

**`FFI\CType::ABI_CDECL`**

**`FFI\CType::ABI_FASTCALL`**

**`FFI\CType::ABI_THISCALL`**

**`FFI\CType::ABI_STDCALL`**

**`FFI\CType::ABI_PASCAL`**

**`FFI\CType::ABI_REGISTER`**

**`FFI\CType::ABI_MS`**

**`FFI\CType::ABI_SYSV`**

**`FFI\CType::ABI_VECTORCALL`**

## Índice

- [FFI\CType::getAlignment](ffi-ctype.getalignment.md) — Descrição
- [FFI\CType::getArrayElementType](ffi-ctype.getarrayelementtype.md) — Descrição
- [FFI\CType::getArrayLength](ffi-ctype.getarraylength.md) — Descrição
- [FFI\CType::getAttributes](ffi-ctype.getattributes.md) — Descrição
- [FFI\CType::getEnumKind](ffi-ctype.getenumkind.md) — Descrição
- [FFI\CType::getFuncABI](ffi-ctype.getfuncabi.md) — Descrição
- [FFI\CType::getFuncParameterCount](ffi-ctype.getfuncparametercount.md) — Obtém a contagem de parâmetros de um tipo de função
- [FFI\CType::getFuncParameterType](ffi-ctype.getfuncparametertype.md) — Obtém o tipo de um parâmetro de função
- [FFI\CType::getFuncReturnType](ffi-ctype.getfuncreturntype.md) — Descrição
- [FFI\CType::getKind](ffi-ctype.getkind.md) — Descrição
- [FFI\CType::getName](ffi-ctype.getname.md) — Descrição
- [FFI\CType::getPointerType](ffi-ctype.getpointertype.md) — Descrição
- [FFI\CType::getSize](ffi-ctype.getsize.md) — Descrição
- [FFI\CType::getStructFieldNames](ffi-ctype.getstructfieldnames.md) — Descrição
- [FFI\CType::getStructFieldOffset](ffi-ctype.getstructfieldoffset.md) — Descrição
- [FFI\CType::getStructFieldType](ffi-ctype.getstructfieldtype.md) — Descrição

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
