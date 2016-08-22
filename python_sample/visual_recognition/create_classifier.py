import json
from os.path import join, dirname
from os import environ
from watson_developer_cloud import VisualRecognitionV3


def main():
    visual_recognition = VisualRecognitionV3('2016-05-20', api_key='eff6ee0aaf5980914180ba2df0a8e220fd854b7c')

    #print('Delete Existing Classifier')
    #print(json.dumps(visual_recognition.delete_classifier(classifier_id='dogs_1780711670'), indent=2))

    print('Start Creating Classifier')
    with open(join(dirname(__file__), '../../resources/beagle.zip'), 'rb') as beagle, \
            open(join(dirname(__file__), '../../resources/husky.zip'), 'rb') as husky, \
            open(join(dirname(__file__), '../../resources/golden-retriever.zip'), 'rb') as golden_retriever, \
            open(join(dirname(__file__), '../../resources/cats.zip'), 'rb') as cats:
        print(json.dumps(
            visual_recognition.create_classifier('dogs',
                                                 beagle_positive_examples=beagle,
                                                 husky_positive_example=husky,
                                                 goldenretriever_positive_examples=golden_retriever,
                                                 negative_examples=cats), indent=2))
    print('Finish Creating Classifier')

if __name__ == '__main__':
        main()
