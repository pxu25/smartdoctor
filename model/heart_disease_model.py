from __future__ import print_function
import numpy as np
import pandas as pd
from sklearn.ensemble import RandomForestClassifier
import pickle
import sys
import warnings
warnings.filterwarnings("ignore", category=DeprecationWarning) 

class HeartDiseaseModel:
    
    def __init__(self, model_location):
        with open(model_location, 'rb') as f:
            self.model = pickle.load(f)
    
    def predict_proba(self, X_new):
            
        return X_new, self.model.predict_proba(X_new)


def main(data_location, model_location):
    # Read dataset
    df = pd.read_csv(data_location)

    # Initialize model
    heart_model = HeartDiseaseModel(model_location)

    # Make prediction
    df, pred = heart_model.predict_proba(df)
    pred = [p[1] for p in pred]
    print(pred)

    # return pred

if __name__ == '__main__':
    main( *sys.argv[1:] )