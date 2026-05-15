
import { Context } from './Context'


class InsultError extends Error {

  isInsultError = true

  sdk = 'Insult'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  InsultError
}

