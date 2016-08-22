import json
from os.path import join, dirname
from os import environ
from watson_developer_cloud import VisualRecognitionV3


def main():
    visual_recognition = VisualRecognitionV3('2016-05-20', api_key='eff6ee0aaf5980914180ba2df0a8e220fd854b7c')

    print('Start Classifying')

    with open(join(dirname(__file__), '../../resources/dogs.jpg'), 'rb') as dogs:

        print(json.dumps(visual_recognition.classify(
            images_file=dogs,  threshold=0.1, classifier_ids=['dogs_1474036614', 'default']), indent=2))

    print('Finish Classifying')


if __name__ == '__main__':
        main()
