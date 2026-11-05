# O atributo ReturnTypeWillChange

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.returntypewillchange.php

---

# O atributo ReturnTypeWillChange

(PHP 8 >= 8.1.0)

## Introdução

A partir do PHP 8.1.0, foi iniciada uma fase provisória de transição para declarações de tipo de retorno
para métodos de classe internos.

A maioria dos métodos internos não finais agora requerem que os métodos substitutos declarem
um tipo de retorno compatível. Caso contrário, um aviso de descontinuação é emitido durante
a validação da herança, alertando que a assinatura viola as regras de covariância.

Em uma futura versão do PHP, a verificação da assinatura do método se tornará rigorosa,
e incompatibilidades causarão um erro fatal.

Caso o tipo de retorno não possa ser declarado para um método substituto devido
a preocupação com compatibilidade entre versões do PHP, ou se o método substituto declara
um tipo de retorno incompatível, um atributo `#[\ReturnTypeWillChange]`
pode ser adicionado para silenciar o aviso de descontinuação.

**Aviso**

Ao substituir métodos definidos em classes definidas pelo usuário, os tipos de retorno são verificados
rigorosamente. Um erro fatal é emitido em caso de incompatibilidade, mesmo que o método substituto
esteja marcado com o atributo.

O atributo **ReturnTypeWillChange** suprime os avisos de
descontinuação *somente* durante a fase de tipo de retorno provisório.
Assim que a verificação de tipo estrita for aplicada, o atributo deixará de funcionar
e uma incompatibilidade na assinatura do método substituto de uma classe interna
causará um erro fatal.

## Resumo da classe

#[[\Attribute](class.attribute.md)]  
final
class ****ReturnTypeWillChange****
{

/\* Métodos \*/

public function [\_\_construct](returntypewillchange.construct.md)()

}

## Veja também

[Visão geral dos atributos](language.attributes.md)

## Índice

- [ReturnTypeWillChange::\_\_construct](returntypewillchange.construct.md) — Constrói uma nova instância do atributo ReturnTypeWillChange

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
