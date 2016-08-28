import json
from os.path import join, dirname
from watson_developer_cloud import VisualRecognitionV3
import commands

def main():
    visual_recognition = VisualRecognitionV3('2016-05-20', api_key='{your_key}')

    print('Start Classifying')

    cmd = commands.getoutput("../../bash_sample/visual_recognition/classify.bash > result.json")
    with open('result.json', 'r') as f:
        obj = json.load(f) # convert to python dictionary
        print json.dumps(obj, indent=2) # all contents
        print json.dumps(obj["images"], indent=2) # a specified content

    print('Finish Classifying')

if __name__ == '__main__':
        main()
