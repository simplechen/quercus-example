package me.laochen.functions;

import com.caucho.quercus.env.Env;
import com.caucho.quercus.env.Value;
import com.caucho.quercus.function.AbstractFunction;

/**
 * <?php
 * echo Debug(a,b,c);
 * @author simple
 *
 */
public class Debug extends AbstractFunction {

	private static final long serialVersionUID = -7973056182146401945L;

	@Override
	public Value call(Env env, Value[] args) {
		for (Value arg : args) {
			System.err.println(arg.getValueType());
		}
		return null;
	}

}
