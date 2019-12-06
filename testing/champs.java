package lolbeans;

public class champs {
	private String champ;
	private int level;
	private double hp;
	private double hprecovery;
	private double resource;
	private double resourcerecovery;
	private double attack;
	private double attackspeed;
	private double armour;
	private double magicarmour;
	private int range;
	private int speed;
	private int spell;
	
	public String getChamp() {
		return champ;
	}
	public void setChamp(String champ) {
		this.champ = champ;
	}
	public int getLevel() {
		return level;
	}
	public void setLevel(int level) {
		this.level = level;
	}
	public double getHp() {
		return hp;
	}
	public void setHp(double hp) {
		this.hp = hp;
	}
	public double getHprecovery() {
		return hprecovery;
	}
	public void setHprecovery(double hprecovery) {
		this.hprecovery = hprecovery;
	}
	public double getResource() {
		return resource;
	}
	public void setResource(double resource) {
		this.resource = resource;
	}
	public double getResourcerecovery() {
		return resourcerecovery;
	}
	public void setResourcerecovery(double resourcerecovery) {
		this.resourcerecovery = resourcerecovery;
	}
	public double getAttack() {
		return attack;
	}
	public void setAttack(double attack) {
		this.attack = attack;
	}
	public double getAttackspeed() {
		return attackspeed;
	}
	public void setAttackspeed(double attackspeed) {
		this.attackspeed = attackspeed;
	}
	public double getArmour() {
		return armour;
	}
	public void setArmour(double armour) {
		this.armour = armour;
	}
	public double getMagicarmour() {
		return magicarmour;
	}
	public void setMagicarmour(double magicarmour) {
		this.magicarmour = magicarmour;
	}
	public int getRange() {
		return range;
	}
	public void setRange(int range) {
		this.range = range;
	}
	public int getSpeed() {
		return speed;
	}
	public void setSpeed(int speed) {
		this.speed = speed;
	}
	public int getSpell() {
		return spell;
	}
	public void setSpell(int spell) {
		this.spell = spell;
	}

	public void champ() {
		this.champ=champ;
		switch(champ) {
		case "¾ÆÄ®¸®" :
			Akali();
		case "Á¦µå" :
			Zed();
		}
	}

	
	private void Akali() {
		this.champ = champ;
		this.level = level;
		this.hp = hp;
		this.hprecovery = hprecovery;
		this.resource = resource;
		this.resourcerecovery = resourcerecovery;
		this.attack = attack;
		this.attackspeed = attackspeed;
		this.armour = armour;
		this.magicarmour = magicarmour;
		this.range = range;
		this.speed = speed;
		this.spell = spell;
		
		hp=hp+(95*(level-1));
		hprecovery=hprecovery+(0.5*(level-1));
		resource=resource;
		resourcerecovery=resourcerecovery;
		attack=attack+(3.3*(level-1));
		attackspeed=attackspeed*(1+0.032*(level-1));
		armour=armour+(3.5*(level-1));
		magicarmour=magicarmour+(1.25*(level-1));
		range=range;
		speed=speed;
		
	}
	
	private void Zed() {
		this.champ = champ;
		this.level = level;
		this.hp = hp;
		this.hprecovery = hprecovery;
		this.resource = resource;
		this.resourcerecovery = resourcerecovery;
		this.attack = attack;
		this.attackspeed = attackspeed;
		this.armour = armour;
		this.magicarmour = magicarmour;
		this.range = range;
		this.speed = speed;
		this.spell = spell;
		
		hp=hp+(85*(level-1));
		hprecovery=hprecovery+(0.65*(level-1));
		resource=resource;
		resourcerecovery=resourcerecovery;
		attack=attack+(3.4*(level-1));
		attackspeed=attackspeed*(1+0.033*(level-1));
		armour=armour+(3.5*(level-1));
		magicarmour=magicarmour+(1.25*(level-1));
		range=range;
		speed=speed;
	}
	
}
