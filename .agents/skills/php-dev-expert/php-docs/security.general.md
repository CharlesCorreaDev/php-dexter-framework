# Considerações Gerais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.general.php

---

# Considerações Gerais

Um sistema completamente seguro é virtualmente impossível de se conseguir,
então uma abordagem freqüentemente usada em segurança é um compromisso entre
risco e usabilidade. Se cada variável enviada pelo usuário precisar
de duas formas de validação biométrica (como escaneamento de retina e
impressão digital), você teria um nível de checagem extremamente alto.
Demoraria meia hora para preencher um formulário mais ou menos
complexo, o que incentiva os usuários a achar maneiras de
burlar a segurança.

A melhor segurança é frequentemente aquele preenche os requerimentos
sem obstruir o usuário a fazer o seu trabalho,
ou sobrecarregando o programador com complexidade
excessiva. De fato, alguns ataques de segurança exploram
esse tipo de segurança super-produzida, que tende a degradar com o tempo.

Uma frase que vale a pena lembrar: Um sistema é tão bom quanto o elo
mais fraco na corrente. Se todas as transações são maciçamente registradas baseado
no tempo, localização, tipo de transação, etc. mas o usuário só
é verificado baseado em um único cookie, a validade de ligar os usuários
ao registro de transação torna-se muito fraca.

Quando estiver testando, tenha em mente que você não será capaz de testar
todas as possibilidades nem mesmo para as páginas mais simples. A entrada
que você pode esperar será totalmente diferente da entrada dada por
um empregado irritado, um cracker com meses livres para tentar
quebrar o sistema, ou um gato andando pelo teclado. Por isso é melhor
olhar para o código da perspectiva lógica, para discernir
onde dados inesperados podem ser introduzidos, e depois seguir onde
o mesmo é modificado, reduzido ou amplificado.

A Internet está cheia de gente tentando fazer o próprio nome
quebrando o código dos outros, derrubando sites, enviando
conteúdo indevido e de outras formas fazendo seu dia interessante.
Não importa se você tem um site grande ou pequeno, você é
um alvo simplesmente por estar online, tendo um servidor que pode
ser conectado. Muitos programas de cracking não discernem por tamanho, eles
simplesmente vasculham blocos gigantes de IPs procurando por vítimas. Tente
não se tornar um.

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
