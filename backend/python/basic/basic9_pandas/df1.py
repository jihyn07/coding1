# dataframe : 행과 열이 있는 2차원 배열
# pandas : dataframe을 처리하는 라이브러리
import pandas as pd
from pandas import Series, DataFrame
import sqlite3

# DB 연동
conn = sqlite3.connect("kospi2.db")

# 2차원 데이터프레임 객체
raw_data = { 'col0' : [1, 2, 3, 4], 'col1' : [10,20,30,40], 'col2' : [100, 200, 300, 400] }

df = DataFrame(raw_data)
df.to_sql('test', conn)

print(df)