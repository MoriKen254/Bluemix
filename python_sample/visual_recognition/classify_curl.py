import json
from os.path import join, dirname
import commands

def main():
    print('Start Classifying')

    cmd = commands.getoutput("../../bash_sample/visual_recognition/classify.bash > result.json")
    with open('result.json', 'r') as f:
        obj = json.load(f) # convert to python dictionary
        print json.dumps(obj, indent=2) # all contents
        print json.dumps(obj["images"], indent=2) # a specified content
        obj2 = obj["images"][0]["classifiers"][0]["classes"][0]["class"]
        print json.dumps(obj2, indent=2)

    print('Finish Classifying')

if __name__ == '__main__':
        main()
