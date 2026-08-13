# Insult SDK feature factory

from insult_sdk.feature.base_feature import InsultBaseFeature
from insult_sdk.feature.test_feature import InsultTestFeature


def _make_feature(name):
    features = {
        "base": lambda: InsultBaseFeature(),
        "test": lambda: InsultTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
