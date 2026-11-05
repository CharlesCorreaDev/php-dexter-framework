# Análise Técnica para Negociadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.trader.php

---

# Análise Técnica para Negociadores

# Introdução

A extensão Trader é uma biblioteca de ações gratuita e de código aberto baseada na TA-Lib. É dedicada a desenvolvedores de software de negociação que precisam realizar análises técnicas de dados do mercado financeiro. Além de muitos indicadores como ADX, MACD, RSI, Estocástico e TRIX, o reconhecimento de padrões de candlestick e diversas funções aritméticas e algébricas vetoriais estão presentes.

Os cálculos podem ser feitos de duas maneiras: TA-Lib e Metastock. Alterá-los usando [trader\_set\_compat()](function.trader-set-compat.md) afetará o funcionamento de algumas funções de Trader.

Algumas funções de Trader fornecem resultados diferentes dependendo do "ponto de partida" dos dados envolvidos. Isso é frequentemente chamado de função com memórias. Um exemplo dessa função é a Média Móvel Exponencial. É possível controlar o período instável (a quantidade de dados a ser removida) usando a função [trader\_set\_unstable\_period()](function.trader-set-unstable-period.md).

Documentação estendida sobre indicadores, fórmulas e implementações em outras linguagens de programação pode ser encontrada em [» https://ta-lib.org/](https://ta-lib.org/).

- [Instalação/Configuração](trader.setup.md)
  - [Dependências](trader.requirements.md)
  - [Instalação](trader.installation.md)
  - [Configurações de Execução](trader.configuration.md)
- [Constantes predefinidas](trader.constants.md)
- [Funções de Trader](ref.trader.md)
  - [trader\_acos](function.trader-acos.md) — Arco cosseno trigonométrico vetorial
  - [trader\_ad](function.trader-ad.md) — Linha Chaikin A/D
  - [trader\_add](function.trader-add.md) — Adição Aritmética Vetorial
  - [trader\_adosc](function.trader-adosc.md) — Oscilador A/D Chaikin
  - [trader\_adx](function.trader-adx.md) — Índice de Movimento Direcional Médio
  - [trader\_adxr](function.trader-adxr.md) — Taxa do Índice de Movimento Direcional Médio
  - [trader\_apo](function.trader-apo.md) — Oscilador de Preço Absoluto
  - [trader\_aroon](function.trader-aroon.md) — Aroon
  - [trader\_aroonosc](function.trader-aroonosc.md) — Oscilador Aroon
  - [trader\_asin](function.trader-asin.md) — Arco seno trigonométrico vetorial
  - [trader\_atan](function.trader-atan.md) — Arco Tangente Trigonométrico Vetorial
  - [trader\_atr](function.trader-atr.md) — Intervalo Verdadeiro Média
  - [trader\_avgprice](function.trader-avgprice.md) — Preço médio
  - [trader\_bbands](function.trader-bbands.md) — Bandas de Bollinger
  - [trader\_beta](function.trader-beta.md) — Beta
  - [trader\_bop](function.trader-bop.md) — Equilíbrio de poder
  - [trader\_cci](function.trader-cci.md) — Índice de Canal de Commodities
  - [trader\_cdl2crows](function.trader-cdl2crows.md) — Dois corvos
  - [trader\_cdl3blackcrows](function.trader-cdl3blackcrows.md) — Três Corvos Negros
  - [trader\_cdl3inside](function.trader-cdl3inside.md) — Três velas internas para cima/baixo
  - [trader\_cdl3linestrike](function.trader-cdl3linestrike.md) — Strike de três linhas
  - [trader\_cdl3outside](function.trader-cdl3outside.md) — Três exteriores para cima/baixo
  - [trader\_cdl3starsinsouth](function.trader-cdl3starsinsouth.md) — Três Estrelas no Sul
  - [trader\_cdl3whitesoldiers](function.trader-cdl3whitesoldiers.md) — Três Soldados Brancos Avançando
  - [trader\_cdlabandonedbaby](function.trader-cdlabandonedbaby.md) — Bebê Abandonado
  - [trader\_cdladvanceblock](function.trader-cdladvanceblock.md) — Bloco Avançado
  - [trader\_cdlbelthold](function.trader-cdlbelthold.md) — Cinturão de Espera
  - [trader\_cdlbreakaway](function.trader-cdlbreakaway.md) — Lacuna de Ruptura
  - [trader\_cdlclosingmarubozu](function.trader-cdlclosingmarubozu.md) — Marubozu de Fechamento
  - [trader\_cdlconcealbabyswall](function.trader-cdlconcealbabyswall.md) — Engolimento de Bebê Escondido
  - [trader\_cdlcounterattack](function.trader-cdlcounterattack.md) — Contra-ataque
  - [trader\_cdldarkcloudcover](function.trader-cdldarkcloudcover.md) — Nuvem Negra
  - [trader\_cdldoji](function.trader-cdldoji.md) — Doji
  - [trader\_cdldojistar](function.trader-cdldojistar.md) — Doji Estrela
  - [trader\_cdldragonflydoji](function.trader-cdldragonflydoji.md) — Doji Libélula
  - [trader\_cdlengulfing](function.trader-cdlengulfing.md) — Padrão de Engolimento
  - [trader\_cdleveningdojistar](function.trader-cdleveningdojistar.md) — Doji Estrela da Noite
  - [trader\_cdleveningstar](function.trader-cdleveningstar.md) — Estrela da Noite
  - [trader\_cdlgapsidesidewhite](function.trader-cdlgapsidesidewhite.md) — Linhas brancas lado a lado com gap de alta/baixa
  - [trader\_cdlgravestonedoji](function.trader-cdlgravestonedoji.md) — Doji Lápide
  - [trader\_cdlhammer](function.trader-cdlhammer.md) — Martelo
  - [trader\_cdlhangingman](function.trader-cdlhangingman.md) — Homem enforcado
  - [trader\_cdlharami](function.trader-cdlharami.md) — Harami
  - [trader\_cdlharamicross](function.trader-cdlharamicross.md) — Cruz Harami
  - [trader\_cdlhighwave](function.trader-cdlhighwave.md) — Vela de onda alta
  - [trader\_cdlhikkake](function.trader-cdlhikkake.md) — Hikkake
  - [trader\_cdlhikkakemod](function.trader-cdlhikkakemod.md) — Hikkake Modificado
  - [trader\_cdlhomingpigeon](function.trader-cdlhomingpigeon.md) — Ave Migratória
  - [trader\_cdlidentical3crows](function.trader-cdlidentical3crows.md) — Três Corvos Idênticos
  - [trader\_cdlinneck](function.trader-cdlinneck.md) — In-Neck
  - [trader\_cdlinvertedhammer](function.trader-cdlinvertedhammer.md) — Martelo Invertido
  - [trader\_cdlkicking](function.trader-cdlkicking.md) — Chute nos pneus
  - [trader\_cdlkickingbylength](function.trader-cdlkickingbylength.md) — Chute - touro/urso determinado pelo Marubozu mais longo
  - [trader\_cdlladderbottom](function.trader-cdlladderbottom.md) — Escada de Baixo
  - [trader\_cdllongleggeddoji](function.trader-cdllongleggeddoji.md) — Doji de Pernas Compridas
  - [trader\_cdllongline](function.trader-cdllongline.md) — Vela de Linha Longa
  - [trader\_cdlmarubozu](function.trader-cdlmarubozu.md) — Marubozu
  - [trader\_cdlmatchinglow](function.trader-cdlmatchinglow.md) — Matching Low
  - [trader\_cdlmathold](function.trader-cdlmathold.md) — Aperto do Mat
  - [trader\_cdlmorningdojistar](function.trader-cdlmorningdojistar.md) — Estrela da Manhã Doji
  - [trader\_cdlmorningstar](function.trader-cdlmorningstar.md) — Estrela da Manhã
  - [trader\_cdlonneck](function.trader-cdlonneck.md) — On-Neck
  - [trader\_cdlpiercing](function.trader-cdlpiercing.md) — Piercing
  - [trader\_cdlrickshawman](function.trader-cdlrickshawman.md) — Homem da Carruagem
  - [trader\_cdlrisefall3methods](function.trader-cdlrisefall3methods.md) — Três Métodos de Subida/Descida
  - [trader\_cdlseparatinglines](function.trader-cdlseparatinglines.md) — Linhas de Separação
  - [trader\_cdlshootingstar](function.trader-cdlshootingstar.md) — Estrela Cadente
  - [trader\_cdlshortline](function.trader-cdlshortline.md) — Vela de Linha Curta
  - [trader\_cdlspinningtop](function.trader-cdlspinningtop.md) — Pião Giratório
  - [trader\_cdlstalledpattern](function.trader-cdlstalledpattern.md) — Padrão de Deliberação
  - [trader\_cdlsticksandwich](function.trader-cdlsticksandwich.md) — Vela Prensada
  - [trader\_cdltakuri](function.trader-cdltakuri.md) — Takuri (Doji Libélula com sombra inferior muito longa)
  - [trader\_cdltasukigap](function.trader-cdltasukigap.md) — Lacuna Tasuki
  - [trader\_cdlthrusting](function.trader-cdlthrusting.md) — Thrusting
  - [trader\_cdltristar](function.trader-cdltristar.md) — Tri-Star
  - [trader\_cdlunique3river](function.trader-cdlunique3river.md) — Unique 3 River
  - [trader\_cdlupsidegap2crows](function.trader-cdlupsidegap2crows.md) — Dois Corvos de Alta com Gap
  - [trader\_cdlxsidegap3methods](function.trader-cdlxsidegap3methods.md) — Três Métodos de Lacunas Positivas/Negativas
  - [trader\_ceil](function.trader-ceil.md) — Teto vetorial
  - [trader\_cmo](function.trader-cmo.md) — Oscilador de Momentum Chande
  - [trader\_correl](function.trader-correl.md) — Coeficiente de correlação de Pearson (r)
  - [trader\_cos](function.trader-cos.md) — Cosseno Trigonométrico Vetorial
  - [trader\_cosh](function.trader-cosh.md) — Cosseno Hiperbólico Trigonométrico Vetorial
  - [trader\_dema](function.trader-dema.md) — Média Móvel Exponencial Dupla
  - [trader\_div](function.trader-div.md) — Divisão Aritmética Vetorial
  - [trader\_dx](function.trader-dx.md) — Índice de movimento direcional
  - [trader\_ema](function.trader-ema.md) — Média Móvel Exponencial
  - [trader\_errno](function.trader-errno.md) — Obtém código de erro
  - [trader\_exp](function.trader-exp.md) — Exponenciação Aritmética Vetorial
  - [trader\_floor](function.trader-floor.md) — Piso Vetorial
  - [trader\_get\_compat](function.trader-get-compat.md) — Obtém modo de compatibilidade
  - [trader\_get\_unstable\_period](function.trader-get-unstable-period.md) — Obtém o período instável
  - [trader\_ht\_dcperiod](function.trader-ht-dcperiod.md) — Transformada de Hilbert - Período do Ciclo Dominante
  - [trader\_ht\_dcphase](function.trader-ht-dcphase.md) — Transformada de Hilbert - Fase do Ciclo Dominante
  - [trader\_ht\_phasor](function.trader-ht-phasor.md) — Transformada de Hilbert - Componentes Fasoriais
  - [trader\_ht\_sine](function.trader-ht-sine.md) — Transformada de Hilbert - Onda Senoidal
  - [trader\_ht\_trendline](function.trader-ht-trendline.md) — Transformada de Hilbert - Linha de Tendência Instantânea
  - [trader\_ht\_trendmode](function.trader-ht-trendmode.md) — Transformada de Hilbert - Modo de Tendência vs. Modo de Ciclo
  - [trader\_kama](function.trader-kama.md) — Média Móvel Adaptativa de Kaufman
  - [trader\_linearreg](function.trader-linearreg.md) — Regressão Linear
  - [trader\_linearreg\_angle](function.trader-linearreg-angle.md) — Ângulo de Regressão Linear
  - [trader\_linearreg\_intercept](function.trader-linearreg-intercept.md) — Interceptação de regressão linear
  - [trader\_linearreg\_slope](function.trader-linearreg-slope.md) — Inclinação da regressão linear
  - [trader\_ln](function.trader-ln.md) — Logaitmo natural vetorial
  - [trader\_log10](function.trader-log10.md) — Log10 Vetorial
  - [trader\_ma](function.trader-ma.md) — Média móvel
  - [trader\_macd](function.trader-macd.md) — Convergência/Divergência da Média Móvel
  - [trader\_macdext](function.trader-macdext.md) — Convergência/Divergência da Média Móvel com tipo MM controlável
  - [trader\_macdfix](function.trader-macdfix.md) — Convergência/Divergência da Média Móvel Fixa 26/12
  - [trader\_mama](function.trader-mama.md) — Média Móvel Adaptativa MESA
  - [trader\_mavp](function.trader-mavp.md) — Média móvel com período variável
  - [trader\_max](function.trader-max.md) — Maior valor em um período especificado
  - [trader\_maxindex](function.trader-maxindex.md) — Índice de maior valor em um período especificado
  - [trader\_medprice](function.trader-medprice.md) — Preço mediano
  - [trader\_mfi](function.trader-mfi.md) — Índice de Fluxo de Dinheiro
  - [trader\_midpoint](function.trader-midpoint.md) — Ponto médio ao longo do período
  - [trader\_midprice](function.trader-midprice.md) — Preço do ponto médio ao longo do período
  - [trader\_min](function.trader-min.md) — Menor valor em um período especificado
  - [trader\_minindex](function.trader-minindex.md) — Índice de menor valor em um período especificado
  - [trader\_minmax](function.trader-minmax.md) — Valores mais baixos e mais altos durante um período especificado
  - [trader\_minmaxindex](function.trader-minmaxindex.md) — Índices de valores mais baixos e mais altos durante um período especificado
  - [trader\_minus\_di](function.trader-minus-di.md) — Indicador direcional negativo
  - [trader\_minus\_dm](function.trader-minus-dm.md) — Movimento Direcional Negativo
  - [trader\_mom](function.trader-mom.md) — Momento
  - [trader\_mult](function.trader-mult.md) — Multiplicação Aritmética Vetorial
  - [trader\_natr](function.trader-natr.md) — Intervalo médio verdadeiro normalizado
  - [trader\_obv](function.trader-obv.md) — Volume em Equilíbrio
  - [trader\_plus\_di](function.trader-plus-di.md) — Indicador Direcional Positivo
  - [trader\_plus\_dm](function.trader-plus-dm.md) — Movimento Direcional Positivo
  - [trader\_ppo](function.trader-ppo.md) — Oscilador de Preço Percentual
  - [trader\_roc](function.trader-roc.md) — Taxa de variação: ((preço/preçoAnterior)-1)\*100
  - [trader\_rocp](function.trader-rocp.md) — Taxa de variação Percentual: (preço-preçoAnterior)/preçoAnterior
  - [trader\_rocr](function.trader-rocr.md) — Taxa de variação: (preço/preçoAnterior)
  - [trader\_rocr100](function.trader-rocr100.md) — Taxa de variação na escala 100: (preço/preçoAnterior)\*100
  - [trader\_rsi](function.trader-rsi.md) — Índice de Força Relativa
  - [trader\_sar](function.trader-sar.md) — SAR parabólico
  - [trader\_sarext](function.trader-sarext.md) — SAR Parabólico - Estendido
  - [trader\_set\_compat](function.trader-set-compat.md) — Define o modo de compatibilidade
  - [trader\_set\_unstable\_period](function.trader-set-unstable-period.md) — Define período instável
  - [trader\_sin](function.trader-sin.md) — Seno trigonométrico vetorial
  - [trader\_sinh](function.trader-sinh.md) — Seno hiperbólico trigonométrico vetorial
  - [trader\_sma](function.trader-sma.md) — Média Móvel Simples
  - [trader\_sqrt](function.trader-sqrt.md) — Raiz quadrada vetorial
  - [trader\_stddev](function.trader-stddev.md) — Desvio Padrão
  - [trader\_stoch](function.trader-stoch.md) — Estocástico
  - [trader\_stochf](function.trader-stochf.md) — Estocástico Rápido
  - [trader\_stochrsi](function.trader-stochrsi.md) — Índice de Força Relativa Estocástica
  - [trader\_sub](function.trader-sub.md) — Subtração Aritmética Vetorial
  - [trader\_sum](function.trader-sum.md) — Somatória
  - [trader\_t3](function.trader-t3.md) — Média Móvel Exponencial Tripla (T3)
  - [trader\_tan](function.trader-tan.md) — Tangente trigonométrica vetorial
  - [trader\_tanh](function.trader-tanh.md) — Tangente Hiperbólica Trigonométrica Vetorial
  - [trader\_tema](function.trader-tema.md) — Média Móvel Exponencial Tripla
  - [trader\_trange](function.trader-trange.md) — Intervalo Verdadeiro
  - [trader\_trima](function.trader-trima.md) — Média Móvel Triangular
  - [trader\_trix](function.trader-trix.md) — Taxa de variação (ROC) de 1 dia de uma EMA triplamente suave
  - [trader\_tsf](function.trader-tsf.md) — Previsão de série temporal
  - [trader\_typprice](function.trader-typprice.md) — Preço típico
  - [trader\_ultosc](function.trader-ultosc.md) — Oscilador Final
  - [trader\_var](function.trader-var.md) — Variância
  - [trader\_wclprice](function.trader-wclprice.md) — Preço de fechamento ponderado
  - [trader\_willr](function.trader-willr.md) — %R de Williams
  - [trader\_wma](function.trader-wma.md) — Média Móvel Ponderada

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
