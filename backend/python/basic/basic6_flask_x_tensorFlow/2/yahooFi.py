# 출처: https://sungwookkang.com/1477 [Data Science Lab]

import yfinance as yf

# Download stock data then export as CSV
data_df = yf.download("AAPL", start="2020-02-01", end="2020-03-20")
print(data_df.Close)
data_df.Close.to_csv('aapl.csv')

# from pandas_datareader import data
# import matplotlib.pyplot as plt
# import pandas as pd
# start_date = '2004-08-19'
# end_date = '2020-04-17'
# google_data = data.DataReader('GOOGL','yahoo', start_date, end_date)
# google_data.head(9)

# print(google_data['Close'].head(9))
# google_data['Close'].head(9).to_csv('./google.csv')


