# Insult SDK feature factory

from feature.base_feature import InsultBaseFeature
from feature.test_feature import InsultTestFeature


def _make_feature(name):
    features = {
        "base": lambda: InsultBaseFeature(),
        "test": lambda: InsultTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
