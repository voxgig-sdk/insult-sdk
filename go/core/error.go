package core

type InsultError struct {
	IsInsultError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewInsultError(code string, msg string, ctx *Context) *InsultError {
	return &InsultError{
		IsInsultError: true,
		Sdk:              "Insult",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *InsultError) Error() string {
	return e.Msg
}
