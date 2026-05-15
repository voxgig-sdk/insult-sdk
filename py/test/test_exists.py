# ProjectName SDK exists test

import pytest
from insult_sdk import InsultSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = InsultSDK.test(None, None)
        assert testsdk is not None
