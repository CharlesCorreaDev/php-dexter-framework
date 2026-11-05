# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intl.constants.php

---

# Constantes predefinidas

**`INTL_ICU_DATA_VERSION`** ([string](language.types.string.md))
:   Versão dos dados na ICU4C.

**`INTL_ICU_VERSION`** ([string](language.types.string.md))
:   A versão da biblioteca ICU atual como uma string decimal com pontos.

**`INTL_MAX_LOCALE_LEN`** ([int](language.types.integer.md))
:   Limite de comprimento do nome da localidade, definido para 80 no código PHP. Nomes mais longos
    que este limite não serão aceitos.

**`IDNA_DEFAULT`** ([int](language.types.integer.md))
:   Proíbe o processamento de pontos de código não atribuídos na entrada para funções
    IDN e não verifica se a entrada está conforme as regras ASCII de nome de domínio.

**`IDNA_ALLOW_UNASSIGNED`** ([int](language.types.integer.md))
:   Permite o processamento de pontos de código não atribuídos na entrada para funções IDN.

**`IDNA_USE_STD3_RULES`** ([int](language.types.integer.md))
:   Verifica se a entrada para funções IDN está conforme as regras ASCII de nome de domínio.

**`IDNA_CHECK_BIDI`** ([int](language.types.integer.md))
:   Verifica se a entrada está conforme as regras BiDi.
    Ignorada pela implementação IDNA2003, que sempre faz esta verificação.

**`IDNA_CHECK_CONTEXTJ`** ([int](language.types.integer.md))
:   Verifica se a entrada está conforme as regras CONTEXTJ.
    Ignorada pela implementação IDNA2003, pois é uma verificação nova na IDNA2008.

**`IDNA_NONTRANSITIONAL_TO_ASCII`** ([int](language.types.integer.md))
:   Opção para processamento não transicional na função
    [idn\_to\_ascii()](function.idn-to-ascii.md). Processamento transicional é ativado
    por padrão. Esta opção é ignorada pela implementação IDNA2003.

**`IDNA_NONTRANSITIONAL_TO_UNICODE`** ([int](language.types.integer.md))
:   Opção para processamento não transicional na função
    [idn\_to\_utf8()](function.idn-to-utf8.md). Processamento transicional é ativado
    por padrão. Esta opção é ignorada pela implementação IDNA2003.

**`INTL_IDNA_VARIANT_2003`** ([int](language.types.integer.md))
:   Usa o algoritmo IDNA 2003 nas funções [idn\_to\_utf8()](function.idn-to-utf8.md) e
    [idn\_to\_ascii()](function.idn-to-ascii.md). Este é o padrão.
    Esta constante e o uso do padrão foram descontinuados a partir do PHP 7.2.0.

**`INTL_IDNA_VARIANT_UTS46`** ([int](language.types.integer.md))
:   Usa o algoritmo UTS #46 nas funções [idn\_to\_utf8()](function.idn-to-utf8.md) e
    [idn\_to\_ascii()](function.idn-to-ascii.md).
    Disponível a partir da ICU 4.6.

**`GRAPHEME_EXTR_COUNT`** ([int](language.types.integer.md))
:   O número padrão de conjuntos de grafemas a serem extraídos.

**`GRAPHEME_EXTR_MAXBYTES`** ([int](language.types.integer.md))
:   O número máximo de bytes retornados.

**`GRAPHEME_EXTR_MAXCHARS`** ([int](language.types.integer.md))
:   O número máximo de caracteres UTF-8 retornados.

Os erros a seguir são parte de uma máscara de bits retornada pelo algoritmo UTS #46 nas funções
[idn\_to\_utf8()](function.idn-to-utf8.md) e [idn\_to\_ascii()](function.idn-to-ascii.md).

**`IDNA_ERROR_EMPTY_LABEL`** ([int](language.types.integer.md))

**`IDNA_ERROR_LABEL_TOO_LONG`** ([int](language.types.integer.md))

**`IDNA_ERROR_DOMAIN_NAME_TOO_LONG`** ([int](language.types.integer.md))

**`IDNA_ERROR_LEADING_HYPHEN`** ([int](language.types.integer.md))

**`IDNA_ERROR_TRAILING_HYPHEN`** ([int](language.types.integer.md))

**`IDNA_ERROR_HYPHEN_3_4`** ([int](language.types.integer.md))

**`IDNA_ERROR_LEADING_COMBINING_MARK`** ([int](language.types.integer.md))

**`IDNA_ERROR_DISALLOWED`** ([int](language.types.integer.md))

**`IDNA_ERROR_PUNYCODE`** ([int](language.types.integer.md))

**`IDNA_ERROR_LABEL_HAS_DOT`** ([int](language.types.integer.md))

**`IDNA_ERROR_INVALID_ACE_LABEL`** ([int](language.types.integer.md))

**`IDNA_ERROR_BIDI`** ([int](language.types.integer.md))

**`IDNA_ERROR_CONTEXTJ`** ([int](language.types.integer.md))

**`ULOC_ACTUAL_LOCALE`** ([int](language.types.integer.md))
:   A localidade de onde os dados realmente vêm.

**`ULOC_VALID_LOCALE`** ([int](language.types.integer.md))
:   A localidade mais específica suportada pela ICU.

**`U_AMBIGUOUS_ALIAS_WARNING`** ([int](language.types.integer.md))
:   Este apelido de conversor pode ir para diferentes implementações de conversão.

**`U_BAD_VARIABLE_DEFINITION`** ([int](language.types.integer.md))
:   Falta o caractere `'$'` ou existe um nome de variável duplicado.

**`U_BRK_ASSIGN_ERROR`** ([int](language.types.integer.md))
:   Erro de sintaxe na isntrução de atribuição de regra RBBI.

**`U_BRK_ERROR_LIMIT`** ([int](language.types.integer.md))
:   Este deve ser sempre o último valor para indicar o limite de falhas de Break Iterator.

**`U_BRK_ERROR_START`** ([int](language.types.integer.md))
:   Início de códigos indicando falhas de Break Iterator.

**`U_BRK_HEX_DIGITS_EXPECTED`** ([int](language.types.integer.md))
:   Dígitos hexadecimais esperados como parte de um caractere escapado em uma regra.

**`U_BRK_INIT_ERROR`** ([int](language.types.integer.md))
:   Falha de inicialização. Provavelmente faltam dados da ICU.

**`U_BRK_INTERNAL_ERROR`** ([int](language.types.integer.md))
:   Um erro interno foi detectado.

**`U_BRK_MALFORMED_RULE_TAG`** ([int](language.types.integer.md))
:   A etiqueta `{nnn}` em uma regra está mal formada.

**`U_BRK_MISMATCHED_PAREN`** ([int](language.types.integer.md))
:   Falta de correspondência de parênteses em uma regra RBBI.

**`U_BRK_NEW_LINE_IN_QUOTED_STRING`** ([int](language.types.integer.md))
:   Faltam aspas de fechamento em uma regra RBBI.

**`U_BRK_RULE_EMPTY_SET`** ([int](language.types.integer.md))
:   Regra contém um Conjunto Unicode vazio.

**`U_BRK_RULE_SYNTAX`** ([int](language.types.integer.md))
:   Erro de sintaxe em regra RBBI.

**`U_BRK_SEMICOLON_EXPECTED`** ([int](language.types.integer.md))
:   Falta `';'` ao final de uma regra RBBI.

**`U_BRK_UNCLOSED_SET`** ([int](language.types.integer.md))
:   Conjunto Unicode escrevendo uma regra RBBI faltando um `']'` de fechamento.

**`U_BRK_UNDEFINED_VARIABLE`** ([int](language.types.integer.md))
:   Uso de variável (`$Variable`) indefinida em uma regra RBBI.

**`U_BRK_UNRECOGNIZED_OPTION`** ([int](language.types.integer.md))
:   Opção em regra RBBI não reconhecida.

**`U_BRK_VARIABLE_REDFINITION`** ([int](language.types.integer.md))
:   Variável de regra RBBI redefinida.

**`U_BUFFER_OVERFLOW_ERROR`** ([int](language.types.integer.md))
:   Um resultado não coube no buffer fornecido.

**`U_CE_NOT_FOUND_ERROR`** ([int](language.types.integer.md))
:   Atualmente usado somente ao configurar topo de variável, mas pode ser usado genericamente.

**`U_COLLATOR_VERSION_MISMATCH`** ([int](language.types.integer.md))
:   Versão da colação não compatível com a versão base.

**`U_DIFFERENT_UCA_VERSION`** ([int](language.types.integer.md))
:   ucol\_open encontrou uma inconsistência entre a versão UCA e a versão de imagem da colação,
    poratanto a colação foi contruída a partir de regras. Sem impacto para funções seguintes.

**`U_ENUM_OUT_OF_SYNC_ERROR`** ([int](language.types.integer.md))
:   `UEnumeration` fora de sincronia com colação subjacente.

**`U_ERROR_LIMIT`** ([int](language.types.integer.md))
:   Apelido de **`U_PLUGIN_ERROR_LIMIT`**.

**`U_ERROR_WARNING_LIMIT`** ([int](language.types.integer.md))
:   Este precisa ser o último valor de alerta que indica
    o limite para alertas UErrorCode (último código de alerta +1).

**`U_ERROR_WARNING_START`** ([int](language.types.integer.md))
:   Início dos resultados de informação (semanticamente bem-sucedidos).

**`U_FILE_ACCESS_ERROR`** ([int](language.types.integer.md))
:   O arquivo solicitado não pôde ser encontrado.

**`U_FMT_PARSE_ERROR_LIMIT`** ([int](language.types.integer.md))
:   O limite para erros de bibiliotecas de formatação.

**`U_FMT_PARSE_ERROR_START`** ([int](language.types.integer.md))
:   Início de erros de bibiliotecas de formatação.

**`U_IDNA_ACE_PREFIX_ERROR`** ([int](language.types.integer.md))

**`U_IDNA_CHECK_BIDI_ERROR`** ([int](language.types.integer.md))

**`U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR`** ([int](language.types.integer.md))

**`U_IDNA_ERROR_LIMIT`** ([int](language.types.integer.md))

**`U_IDNA_ERROR_START`** ([int](language.types.integer.md))

**`U_IDNA_LABEL_TOO_LONG_ERROR`** ([int](language.types.integer.md))

**`U_IDNA_PROHIBITED_ERROR`** ([int](language.types.integer.md))

**`U_IDNA_STD3_ASCII_RULES_ERROR`** ([int](language.types.integer.md))

**`U_IDNA_UNASSIGNED_ERROR`** ([int](language.types.integer.md))

**`U_IDNA_VERIFICATION_ERROR`** ([int](language.types.integer.md))

**`U_IDNA_ZERO_LENGTH_LABEL_ERROR`** ([int](language.types.integer.md))

**`U_ILLEGAL_ARGUMENT_ERROR`** ([int](language.types.integer.md))
:   Indica um valor de argumento incorreto.

**`U_ILLEGAL_CHAR_FOUND`** ([int](language.types.integer.md))
:   Conversão de caracteres: sequência ilegal de entrada.

**`U_ILLEGAL_CHAR_IN_SEGMENT`** ([int](language.types.integer.md))
:   Não utilizada a partir da ICU 2.4.

**`U_ILLEGAL_CHARACTER`** ([int](language.types.integer.md))
:   Um caractere especial está fora de seu contexto permitido.

**`U_ILLEGAL_ESCAPE_SEQUENCE`** ([int](language.types.integer.md))
:   Sequência de escape ISO-2022 ilegal.

**`U_ILLEGAL_PAD_POSITION`** ([int](language.types.integer.md))
:   Símbolo de preenchimento mal posicionado no modelo de numeral.

**`U_INDEX_OUTOFBOUNDS_ERROR`** ([int](language.types.integer.md))
:   Tentativa de acessar índice fora do intervalo.

**`U_INTERNAL_PROGRAM_ERROR`** ([int](language.types.integer.md))
:   Indica um problema no código de programação da biblioteca.

**`U_INTERNAL_TRANSLITERATOR_ERROR`** ([int](language.types.integer.md))
:   Erro de sistema interno do transliterador.

**`U_INVALID_CHAR_FOUND`** ([int](language.types.integer.md))
:   Conversão de caracteres: sequência de entrada não mapeada. Em outras APIs: caractere inválido.

**`U_INVALID_FORMAT_ERROR`** ([int](language.types.integer.md))
:   Formato de data não está conforme esperado.

**`U_INVALID_FUNCTION`** ([int](language.types.integer.md))
:   Uma regra `'&fn()'` especifica um transliterador desconhecido.

**`U_INVALID_ID`** ([int](language.types.integer.md))
:   Uma regra `'::id'` especifica um transliterador desconhecido.

**`U_INVALID_PROPERTY_PATTERN`** ([int](language.types.integer.md))
:   Não utilizada a partir da ICU 2.4.

**`U_INVALID_RBT_SYNTAX`** ([int](language.types.integer.md))
:   Uma regra `'::id'` foi passada ao interpretador RuleBasedTransliterator.

**`U_INVALID_STATE_ERROR`** ([int](language.types.integer.md))
:   A operação solicitada não pode ser concluída com a ICU no estado atual.

**`U_INVALID_TABLE_FILE`** ([int](language.types.integer.md))
:   Arquivo de tabela de conversão não encontrado.

**`U_INVALID_TABLE_FORMAT`** ([int](language.types.integer.md))
:   Arquivo de tabela de conversão encontrado, porém corrompido.

**`U_INVARIANT_CONVERSION_ERROR`** ([int](language.types.integer.md))
:   Não foi possível converter uma string `UChar*` para `char*`
    com o conversor invariante.

**`U_MALFORMED_EXPONENTIAL_PATTERN`** ([int](language.types.integer.md))
:   Símbolo de agrupamento no modelo de expoente.

**`U_MALFORMED_PRAGMA`** ([int](language.types.integer.md))
:   Um pragma `'use'` está inválido.

**`U_MALFORMED_RULE`** ([int](language.types.integer.md))
:   Elementos de uma regra estão mal posicionados.

**`U_MALFORMED_SET`** ([int](language.types.integer.md))
:   Um modelo de `UnicodeSet` está inválido.

**`U_MALFORMED_SYMBOL_REFERENCE`** ([int](language.types.integer.md))
:   Não utilizada a partir da ICU 2.4.

**`U_MALFORMED_UNICODE_ESCAPE`** ([int](language.types.integer.md))
:   Um modelo de escape Unicode está inválido.

**`U_MALFORMED_VARIABLE_DEFINITION`** ([int](language.types.integer.md))
:   Uma definição de variável está inválida.

**`U_MALFORMED_VARIABLE_REFERENCE`** ([int](language.types.integer.md))
:   Uma referência a variável está inválida.

**`U_MEMORY_ALLOCATION_ERROR`** ([int](language.types.integer.md))
:   Erro de alocação de memória.

**`U_MESSAGE_PARSE_ERROR`** ([int](language.types.integer.md))
:   Não foi possível interpretar uma mensagem (formato da mensagem).

**`U_MISMATCHED_SEGMENT_DELIMITERS`** ([int](language.types.integer.md))
:   Não utilizada a partir da ICU 2.4.

**`U_MISPLACED_ANCHOR_START`** ([int](language.types.integer.md))
:   Uma âncora de início aparece em uma posição ilegal.

**`U_MISPLACED_COMPOUND_FILTER`** ([int](language.types.integer.md))
:   Um filtro composto está em uma localização ilegal.

**`U_MISPLACED_CURSOR_OFFSET`** ([int](language.types.integer.md))
:   Um deslocamento de cursor aparece em uma posição ilegal.

**`U_MISPLACED_QUANTIFIER`** ([int](language.types.integer.md))
:   Um quantificador aparece após um delimitador de fechamento de segmento.

**`U_MISSING_OPERATOR`** ([int](language.types.integer.md))
:   Uma regra não contém operador.

**`U_MISSING_RESOURCE_ERROR`** ([int](language.types.integer.md))
:   O recurso solicitado não pôde ser encontrado.

**`U_MISSING_SEGMENT_CLOSE`** ([int](language.types.integer.md))
:   Não utilizada a partir da ICU 2.4.

**`U_MULTIPLE_ANTE_CONTEXTS`** ([int](language.types.integer.md))
:   Mais que um contexto "ante".

**`U_MULTIPLE_COMPOUND_FILTERS`** ([int](language.types.integer.md))
:   Mais que um filtro composto.

**`U_MULTIPLE_CURSORS`** ([int](language.types.integer.md))
:   Mais que um cursor.

**`U_MULTIPLE_DECIMAL_SEPARATORS`** ([int](language.types.integer.md))
:   Mais que um separador de decimais no modelo de numeral.

**`U_MULTIPLE_DECIMAL_SEPERATORS`** ([int](language.types.integer.md))
:   Apelido de **`U_MULTIPLE_DECIMAL_SEPARATORS`**.

**`U_MULTIPLE_EXPONENTIAL_SYMBOLS`** ([int](language.types.integer.md))
:   Mais que um símbolo de expoente no modelo de numeral.

**`U_MULTIPLE_PAD_SPECIFIERS`** ([int](language.types.integer.md))
:   Mais que um símbolo de preenchimento no modelo de numeral.

**`U_MULTIPLE_PERCENT_SYMBOLS`** ([int](language.types.integer.md))
:   Mais que um símbolo de porcentagem no modelo de numeral.

**`U_MULTIPLE_PERMILL_SYMBOLS`** ([int](language.types.integer.md))
:   Mais que um símbolo de permilagem no modelo de numeral.

**`U_MULTIPLE_POST_CONTEXTS`** ([int](language.types.integer.md))
:   Mais que um contexto "post".

**`U_NO_SPACE_AVAILABLE`** ([int](language.types.integer.md))
:   Não há espaço disponível para expansão em-buffer para formas arábicas.

**`U_NO_WRITE_PERMISSION`** ([int](language.types.integer.md))
:   Tentativa de modificação de dados constantes ou somente-leitura.

**`U_PARSE_ERROR`** ([int](language.types.integer.md))
:   Equivalente ao `ParseException` do Java.

**`U_PARSE_ERROR_LIMIT`** ([int](language.types.integer.md))
:   O limite para erros de Transliteradores.

**`U_PARSE_ERROR_START`** ([int](language.types.integer.md))
:   Início de erros de Transliteradores.

**`U_PATTERN_SYNTAX_ERROR`** ([int](language.types.integer.md))
:   Erro de sintaxe no modelo de formatação.

**`U_PRIMARY_TOO_LONG_ERROR`** ([int](language.types.integer.md))
:   Usuário tentou definit topo de variável a um primário mais longo que dois bytes.

**`U_REGEX_BAD_ESCAPE_SEQUENCE`** ([int](language.types.integer.md))
:   Sequência de escape com barra invertida desconhecida no modelo.

**`U_REGEX_BAD_INTERVAL`** ([int](language.types.integer.md))
:   Erro no intervalo `{min,max}`.

**`U_REGEX_ERROR_LIMIT`** ([int](language.types.integer.md))
:   Este valor precisa ser o último a indicar o limite de erros de expressões regulares.

**`U_REGEX_ERROR_START`** ([int](language.types.integer.md))
:   Início de código indicando falhas de expressões regulares.

**`U_REGEX_INTERNAL_ERROR`** ([int](language.types.integer.md))
:   Um erro interno (bug) foi detectado.

**`U_REGEX_INVALID_BACK_REF`** ([int](language.types.integer.md))
:   Referência retroativa a grupo de captura não existente.

**`U_REGEX_INVALID_FLAG`** ([int](language.types.integer.md))
:   Valor inválido para sinalizadores de modo de correspondência.

**`U_REGEX_INVALID_STATE`** ([int](language.types.integer.md))
:   `RegexMatcher` em estado inválido para a operação requisitada.

**`U_REGEX_LOOK_BEHIND_LIMIT`** ([int](language.types.integer.md))
:   Correspondências de modelo de Look-Behind precisam ter um comprimento máximo limitado.

**`U_REGEX_MAX_LT_MIN`** ([int](language.types.integer.md))
:   Em `{min,max}`, max é menor que min.

**`U_REGEX_MISMATCHED_PAREN`** ([int](language.types.integer.md))
:   Parênteses aninhados incorretamente no modelo de expressões regulares.

**`U_REGEX_NUMBER_TOO_BIG`** ([int](language.types.integer.md))
:   Número decimal é muito grande.

**`U_REGEX_PROPERTY_SYNTAX`** ([int](language.types.integer.md))
:   Propriedade Unicode incorreta.

**`U_REGEX_RULE_SYNTAX`** ([int](language.types.integer.md))
:   Erro de sintaxe no modelo de expressões regulares.

**`U_REGEX_SET_CONTAINS_STRING`** ([int](language.types.integer.md))
:   Expressões regulares não podem ter `UnicodeSet`s contendo strings.

**`U_REGEX_UNIMPLEMENTED`** ([int](language.types.integer.md))
:   Uso de um recurso de expressões regulares que ainda não está implementado.

**`U_RESOURCE_TYPE_MISMATCH`** ([int](language.types.integer.md))
:   Uma operação é solicitada em um recurso que não a suporta.

**`U_RULE_MASK_ERROR`** ([int](language.types.integer.md))
:   Uma regra está inibida por uma regra anterior mais geral.

**`U_SAFECLONE_ALLOCATED_WARNING`** ([int](language.types.integer.md))
:   Uma operação `SafeClone` solicitou alocação de memória (apenas informacional).

**`U_SORT_KEY_TOO_SHORT_WARNING`** ([int](language.types.integer.md))
:   Número de níveis solicitados em `getBound` é maior que
    o número de níveis na chave de ordenação.

**`U_STANDARD_ERROR_LIMIT`** ([int](language.types.integer.md))
:   Este valor precisa ser um último a indicar o limite para erros padrão.

**`U_STATE_OLD_WARNING`** ([int](language.types.integer.md))
:   ICU tem que usar camada de compatibilidade para construir o serviço.
    Esperada degradação de desempenho/uso de memória.

**`U_STATE_TOO_OLD_ERROR`** ([int](language.types.integer.md))
:   ICU não pode construir um serviço a partir deste estado, já que não é mais suportado.

**`U_STRING_NOT_TERMINATED_WARNING`** ([int](language.types.integer.md))
:   Uma string de saída não pode ter o byte NUL de terminação porque o comprimento da saída é igual à capacidade de destino (`length==destCapacity`).

**`U_STRINGPREP_CHECK_BIDI_ERROR`** ([int](language.types.integer.md))
:   Apelido de **`U_IDNA_CHECK_BIDI_ERROR`**.

**`U_STRINGPREP_PROHIBITED_ERROR`** ([int](language.types.integer.md))
:   Apelido de **`U_IDNA_PROHIBITED_ERROR`**.

**`U_STRINGPREP_UNASSIGNED_ERROR`** ([int](language.types.integer.md))
:   Apelido de **`U_IDNA_UNASSIGNED_ERROR`**.

**`U_TOO_MANY_ALIASES_ERROR`** ([int](language.types.integer.md))
:   Há muitos apelidos no caminho para o recurso solicitado.
    É bem possível que uma referência circular de definição de apelidos tenha ocorrido.

**`U_TRAILING_BACKSLASH`** ([int](language.types.integer.md))
:   Uma barra invertida sobrando no final da sequência.

**`U_TRUNCATED_CHAR_FOUND`** ([int](language.types.integer.md))
:   Conversão de caracteres: sequência de entrada incompleta.

**`U_UNCLOSED_SEGMENT`** ([int](language.types.integer.md))
:   Um `')'` de fechamento está faltando.

**`U_UNDEFINED_SEGMENT_REFERENCE`** ([int](language.types.integer.md))
:   Uma referência de segmento não corresponde a um segmento definido.

**`U_UNDEFINED_VARIABLE`** ([int](language.types.integer.md))
:   Uma referência de variável não corresponde a uma variável definida.

**`U_UNEXPECTED_TOKEN`** ([int](language.types.integer.md))
:   Erro de sintaxe no modelo de formatação.

**`U_UNMATCHED_BRACES`** ([int](language.types.integer.md))
:   Colchetes não têm correspondência no modelo da mensagem.

**`U_UNQUOTED_SPECIAL`** ([int](language.types.integer.md))
:   Um caractere especial não foi envolvido em aspas ou escapado.

**`U_UNSUPPORTED_ATTRIBUTE`** ([int](language.types.integer.md))
:   Não utilizado a partir da ICU 2.4.

**`U_UNSUPPORTED_ERROR`** ([int](language.types.integer.md))
:   Operação solicitada não suportada no contexto atual.

**`U_UNSUPPORTED_ESCAPE_SEQUENCE`** ([int](language.types.integer.md))
:   Sequência de escape ISO-2022 não suportada.

**`U_UNSUPPORTED_PROPERTY`** ([int](language.types.integer.md))
:   Não utilizada a partir da ICU 2.4.

**`U_UNTERMINATED_QUOTE`** ([int](language.types.integer.md))
:   Uma apóstrofo (aspas simples) de fechamento está faltando.

**`U_USELESS_COLLATOR_ERROR`** ([int](language.types.integer.md))
:   Colador é apenas de opções e nenhuma base foi especificada.

**`U_USING_DEFAULT_WARNING`** ([int](language.types.integer.md))
:   Uma pesquisa no pacote de recursos retornou um resultado da localidade raiz (não é um erro).

**`U_USING_FALLBACK_WARNING`** ([int](language.types.integer.md))
:   Uma pesquisa no pacote de recursos retornou um resultado reserva (not an error).

**`U_VARIABLE_RANGE_EXHAUSTED`** ([int](language.types.integer.md))
:   Muitos substitutos gerados para o intervalo de variáveis selecionado.

**`U_VARIABLE_RANGE_OVERLAP`** ([int](language.types.integer.md))
:   O intervalo de variáveis sobrepõe os caracteres usados nas regras.

**`U_ZERO_ERROR`** ([int](language.types.integer.md))
:   Nenhum erro, nenhum alerta.

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
