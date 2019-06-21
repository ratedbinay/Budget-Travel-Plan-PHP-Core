import pandas as pd
import csv

calls_df = pd.read_html("https://www.nepalbank.com.np/exchange-rate")
#calls_df[0]=calls_df

calls_df[0].to_csv('C:/xampp/htdocs/budget2/rates.csv', index=False)
