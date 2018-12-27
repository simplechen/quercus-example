package me.laochen.beans;

public class MyBean {
	int _value;

	public MyBean(int value) {
		_value = value;
	}

	public int getValue() {
		return _value;
	}

	public String makeMessage() {
		return "Hello, my value is " + _value;
	}
}