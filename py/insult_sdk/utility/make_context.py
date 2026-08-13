# Insult SDK utility: make_context

from insult_sdk.core.context import InsultContext


def make_context_util(ctxmap, basectx):
    return InsultContext(ctxmap, basectx)
