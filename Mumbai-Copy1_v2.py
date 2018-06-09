import pandas as pd               
import numpy as np
import pickle

#import mysql.connector as sql
import mysql.connector
from sklearn.model_selection import train_test_split   #splitting data

from sklearn.linear_model import LinearRegression         #linear regression
from sklearn.metrics.regression import mean_squared_error #error metrics
from sklearn.metrics import mean_absolute_error

import seaborn as sns                       #visualisation
import matplotlib.pyplot as plt             #visualisation


# ####  Read new data
db_connection = mysql.connector.connect(host='127.0.0.1',port='3306' ,database='House_price', user='root', password='root')
row = []
cursor = db_connection.cursor()
query =("select * from postdata");
result = cursor.execute(query)
for row in list(cursor.fetchall()):
    
    print( list(row))
print(list(row))
list1=[7.83932,0,18.1,0,0.655,6.209,65.4,2.9634,24,666,20.2,396.9,13.22]
finallist = [list1,row]
input_array=np.array(finallist) 
input_array=np.delete(input_array,np.s_[8:9],1) ## Since AccessibilityToHighway is dropped

# Loading the model pickle
lm_model_pkl = open("lm_model.pkl", 'rb')
lm_model = pickle.load(lm_model_pkl)
print("Model coefficients:  ",lm_model.coef_)

# ###  Predict on new data
y_pred=lm_model.predict(input_array)
print("Predicted House price:",y_pred)


