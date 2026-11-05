# Gráficos — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/charts.html

---

# Gráficos[¶](#charts-1 "Link permanente para este título")

Novo na versão 3.4.0.

Desde a versão 3.4.0 do phpMyAdmin, você pode facilmente gerar gráficos de uma consulta SQL clicando no link “Exibir gráfico” na área “Operações de resultados da consulta”.

![_images/query_result_operations.png](_images/query_result_operations.png)

Uma janela flutuante “Exibir gráfico” é mostrada, na qual você pode personalizar o gráfico com as seguintes opções.

- Chart type: Allows you to choose the type of chart. Supported types are bar charts, column charts, line charts, spline charts, area charts, pie charts and timeline charts (only the chart types applicable for current series selection are offered).
- Eixo X: Permite escolher o campo para o eixo principal.
- Série: Permite escolher séries para o gráfico. Você pode escolher várias séries.
- Título: Permite especificar um título para o gráfico, que é exibido acima do gráfico.
- Rótulos do eixo X e do eixo Y: Permite especificar rótulos para os eixos.
- Start row and a number of rows: Allows generating charts only for a specified number of rows of the results set.

![_images/chart.png](_images/chart.png)

## Implementação do gráfico[¶](#chart-implementation "Link permanente para este título")

Os gráficos no phpMyAdmin são desenhados usando a biblioteca jQuery [jqPlot](http://www.jqplot.com/).

## Exemplos[¶](#examples "Link permanente para este título")

### Gráfico de pizza[¶](#pie-chart "Link permanente para este título")

Os resultados da consulta para um gráfico de pizza simples podem ser gerados com:

```
SELECT 'Food' AS 'expense',
   1250 AS 'amount' UNION
SELECT 'Accommodation', 500 UNION
SELECT 'Travel', 720 UNION
SELECT 'Misc', 220
```

E o resultado dessa consulta é:

| expense | amount |
| --- | --- |
| Food | 1250 |
| Accommodation | 500 |
| Travel | 720 |
| Misc | 220 |

Escolhendo a despesa como o eixo X e o montante como série:

![_images/pie_chart.png](_images/pie_chart.png)

### Gráfico de barras e colunas[¶](#bar-and-column-chart "Link permanente para este título")

Tanto gráficos de barras quanto gráficos de colunas suportam empilhamento. Ao selecionar um desses tipos, uma caixa de seleção é exibida para selecionar o empilhamento.

Os resultados da consulta para um gráfico simples de barras ou colunas podem ser gerados com:

```
SELECT
   'ACADEMY DINOSAUR' AS 'title',
   0.99 AS 'rental_rate',
   20.99 AS 'replacement_cost' UNION
SELECT 'ACE GOLDFINGER', 4.99, 12.99 UNION
SELECT 'ADAPTATION HOLES', 2.99, 18.99 UNION
SELECT 'AFFAIR PREJUDICE', 2.99, 26.99 UNION
SELECT 'AFRICAN EGG', 2.99, 22.99
```

E o resultado dessa consulta é:

| title | rental\_rate | replacement\_cost |
| --- | --- | --- |
| ACADEMY DINOSAUR | 0.99 | 20.99 |
| ACE GOLDFINGER | 4.99 | 12.99 |
| ADAPTATION HOLES | 2.99 | 18.99 |
| AFFAIR PREJUDICE | 2.99 | 26.99 |
| AFRICAN EGG | 2.99 | 22.99 |

Escolhendo title como o eixo X e rental\_rate e replacement\_cost como séries:

![_images/column_chart.png](_images/column_chart.png)

### Gráfico de dispersão[¶](#scatter-chart "Link permanente para este título")

Os gráficos de dispersão são úteis na identificação do movimento de uma ou mais variáveis em comparação com outra variável.

Usando o mesmo conjunto de dados da seção de gráficos de barras e colunas e escolhendo replacement\_cost como o eixo X e rental\_rate como série:

![_images/scatter_chart.png](_images/scatter_chart.png)

### Gráficos de linha, spline e linha do tempo[¶](#line-spline-and-timeline-charts "Link permanente para este título")

Esses gráficos podem ser usados para ilustrar tendências nos dados subjacentes. Os gráficos spline desenham linhas suaves enquanto os gráficos de linha do tempo desenham o eixo X levando em consideração as distâncias entre as datas/tempos.

Os resultados da consulta para um gráfico de linha, spline ou linha do tempo simples podem ser gerados com:

```
SELECT
   DATE('2006-01-08') AS 'date',
   2056 AS 'revenue',
   1378 AS 'cost' UNION
SELECT DATE('2006-01-09'), 1898, 2301 UNION
SELECT DATE('2006-01-15'), 1560, 600 UNION
SELECT DATE('2006-01-17'), 3457, 1565
```

E o resultado dessa consulta é:

| Data | receita | custo |
| --- | --- | --- |
| 2016-01-08 | 2056 | 1378 |
| 2006-01-09 | 1898 | 2301 |
| 2006-01-15 | 1560 | 600 |
| 2006-01-17 | 3457 | 1565 |

![_images/line_chart.png](_images/line_chart.png)
![_images/spline_chart.png](_images/spline_chart.png)
![_images/timeline_chart.png](_images/timeline_chart.png)
