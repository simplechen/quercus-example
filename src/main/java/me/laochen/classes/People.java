package me.laochen.classes;

public class People {
	private String name;
	private String phoneNo;
	public People(String name, String phoneNo) {
		super();
		this.name = name;
		this.phoneNo = phoneNo;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getPhoneNo() {
		return phoneNo;
	}
	public void setPhoneNo(String phoneNo) {
		this.phoneNo = phoneNo;
	}
	
	public void show() {
		System.err.println("[php call java class People]"+this.name+"|"+this.phoneNo);
	}
	
	
	@Override
	public String toString() {
		return "People [name=" + name + ", phoneNo=" + phoneNo + "]";
	}
	
	
	
	
}
